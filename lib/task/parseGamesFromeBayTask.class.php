<?php

class parseGamesFromeBayTask extends sfBaseTask {

  protected function configure() {
    // // add your own arguments here
    // $this->addArguments(array(
    //   new sfCommandArgument('my_arg', sfCommandArgument::REQUIRED, 'My argument'),
    // ));

    $this->addOptions(array(
        new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
        new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
        new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'doctrine'),
            // add your own options here
    ));

    $this->namespace = 'games';
    $this->name = 'parse-ebay-games';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
read the JSON from yahoo pipes and then process the games into local database
EOF;
  }

  protected function execute($arguments = array(), $options = array()) {

    // initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $connection = $databaseManager->getDatabase($options['connection'])->getConnection();

    // add your code here
    $urls['PS3'] = "http://pipes.yahoo.com/pipes/pipe.run?_id=4bbd1802903b3910282a81dc7e00adde&_render=json";
    $urls['XBOX360'] = "http://pipes.yahoo.com/pipes/pipe.run?_id=3f548e0603bbf2f9927d3bb6b1d741e5&_render=json";

    /*
    // write JSON to disk
    foreach($urls as $platform => $url) {
      $jsonData = file_get_contents($url);
      $op = fopen('/tmp/'.$platform.".json", 'w');
      // append new data
      fwrite($op, $jsonData);    
      // close handles
      fclose($op);
    }
die;
*/
    foreach ($urls as $platform => $url) {

      $jsonData = file_get_contents("/tmp/".$platform.".json");     
      $gamesData = json_decode($jsonData, true);

      $items = $gamesData['value']['items'];

      print_r($items);
      die;
      foreach ($items as $item) {
        
        $title = $item["title"];
        $blocktitle = str_replace(" ","", strtoupper(preg_replace("/[^a-zA-Z0-9\s]/", "", $title)));
        $link = $item["link"];
        $description = $item["description"];
        $guid = md5($item["guid"]["content"]);
        $pubDate = $item["pubDate"];
        $currentPrice = $item["rx:CurrentPrice"]["content"];
        $endTime = (int) $item["rx:EndTime"]["content"];
        $bidCount = $item["rx:BidCount"]["content"];
        $category = $item["rx:Category"]["content"];
        
        // get the end date
        $splitOne = explode("<div>End date: <span>", $description);
        $splitTwo = explode('</span></div><a rel="nofollow"', $splitOne[1]);
        $endDate = $splitTwo[0];
        if(stripos($endDate, '</span>') !== false) {
          $splitThree = explode('</span>', $endDate);
          $endDate = $splitThree[0];
        }
        
        $endTimeStamp = strtotime($endDate);
        $timeLeft = $endTimeStamp - time();
        
        // auction has ended
        if($timeLeft < 0) {
          $status = "ended";
          // figure out how long ago the auction ended
          $timeSinceEnded = time() - $endTimeStamp;
          $mins = round(($timeSinceEnded / 60));
          $hrs = round(($timeSinceEnded / 60));
        } else {
          $status = "live";
          // how long left?
          $mins = round(($timeLeft / 60));
          $hrs = round(($mins / 60));
        }
           
        // live auction..
        if($status=="live") {
          $msg = "";
          if($hrs >= 1) {
            $message= "Auction due to finish in ".$hrs." hrs, ".$mins." mins";           
          } else {
            $message= "Auction due to finish in ".$mins." mins";           
          }
        } else if($status=="ended") {
          if($hrs >= 1) {
            $message= "Auction ended ".$hrs." hrs, ".$mins." mins ago";           
          } else {
            $message= "Auction ended ".$mins." mins ago";           
          }
        }
        
        echo "\n ####################";
        echo "\n TITLE :: ".$title;
        echo "\n LINK :: ".$link;
        # echo "\n MESSAGE :: ".$message;
        echo "\n END DATE : ".$endDate;
        echo "\n CURRENT PRICE :: ".$currentPrice;
        echo "\n NUMBER OF BIDS :: ".$bidCount;
        
        // auction has ended.. save it to the database for future reference
        if ($timeLeft < 0) {

          // grab the bits from the auction page..
          $profileData = $this->getDetailsFromPage($link);

          $endPrice = $profileData['endPrice'];
          $postagePacking = $profileData['postagePacking'];
          $profileName = $profileData['profileName'];
          $profileUrl = $profileData['profileUrl'];
          $feedbackScore = $profileData['feedbackScore'];

          // check the final price
          $finalPrice = $currentPrice;
          if ($endPrice > $currentPrice) {
            $finalPrice = $endPrice;
          } 
                 
          // save off the details
          $ebayGame = new EbayGame();  
          $ebayGame->title = $title;
          $ebayGame->block_title = $blocktitle;
          $ebayGame->link = $link;
          $ebayGame->guid = $guid;
          $ebayGame->description = $description;
          $ebayGame->current_price = $finalPrice;
          $ebayGame->end_time = $endTimeStamp; 
          $ebayGame->bid_count = $bidCount;
          $ebayGame->postage_packing_fee = $postagePacking;
          $ebayGame->profile_name = $profileName;
          $ebayGame->profile_url = $profileUrl;
          $ebayGame->feedback_score = $feedbackScore;
          $ebayGame->title_processed = 1;
          $ebayGame->platform = $platform;
          $ebayGame->status = "ended";
          
          // calculate the score..
          $ebayGame->calculateScore();
          
          /*
          echo "<pre>";
          print_r($ebayGame->toArray());
          echo "</pre>";
          */
          
        } else {
          
          echo "\n PERFORM LOOKUP OF TOP GAMES VS CURRENT GAME!";
          
          
          
        }
      }
    }
  }

  /**
   * when the auction has finished.. fetch the details from the page..
   * @param type $url
   * @return type 
   */
  function getDetailsFromPage($url) {

    // get DOM from URL or file
    $html = file_get_contents($url);
    $split = explode('itemprop="price" class="vi-is1-prcp-eu">', $html);
    if(!empty($split[1])) {
      $split2 = explode('</span>', $split[1]);
      $endPrice = str_replace('&#163;', '', $split2[0]);
    } else {
      $endPrice = "????";
    }

    $split = explode('vi-is1-sh-srvcCost vi-is1-hideElem vi-is1-showElem', $html);

    if(!empty($split[1])){
      $split2 = explode('</span>',$split[1]);
      $postagePacking = str_replace('">£','',$split2[0]);
    } else {
      $postagePacking = "????";
    }

    $split = explode("Feedback score of", $html);
    if(!empty($split[1]) > 0){
      $split2 = explode('" href="http',$split[1]);
      $feedbackScore = $split2[0];
    } else {
      $feedbackScore = "????";
    }

    $split = explode("s-details", $html);
    if(!empty($split[1])) {
      #print_r($split[1]);
      $split2 = explode('<div class="mbg"><a title="Member ID ',$split[1]); 
      $split3 = explode('" href="', $split2[1]);
      $split4 = explode('?_trksid', $split3[1]);

      $profileName = $split3[0];
      $profileUrl = $split4[0];
    } else {
      $profileName = "????";
      $profileUrl = "????";
    }
    $returnAr['profileName'] = trim($profileName);
    $returnAr['profileUrl'] = trim($profileUrl);
    $returnAr['feedbackScore'] = trim($feedbackScore);
    $returnAr['postagePacking'] = str_replace(".","",trim($postagePacking));
    $returnAr['endPrice'] = trim($endPrice);
    return $returnAr;
  }
}