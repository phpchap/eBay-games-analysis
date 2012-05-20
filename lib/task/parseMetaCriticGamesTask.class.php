<?php

class parseMetaCriticGamesTask extends sfBaseTask
{
  protected function configure()
  {
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

    $this->namespace        = 'games';
    $this->name             = 'parse-metacritic-games';
    $this->briefDescription = 'read games list from meta critic scraped page';
    $this->detailedDescription = <<<EOF
The [parseMetaCriticGames|INFO] task does things.
Call it with:

  [php symfony parseMetaCriticGames|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    // initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $connection = $databaseManager->getDatabase($options['connection'])->getConnection();

    // Using the optional flags parameter since PHP 5
    $fileAr[] = "/var/www/eBay-games-analysis/data/meta-critic-games/xbox-360-games.txt";
    $fileAr[] = "/var/www/eBay-games-analysis/data/meta-critic-games";
    
    // loop over over list of files
    foreach($fileAr as $file) {
      $xboxGamesFromMetaCritic = file($file);
      $sizeOfXboxGamesList = count($xboxGamesFromMetaCritic);
      $x = 0;
      $gamePosition = 1;
      $metaPosition = 2;
      $limit = 4;
      $gamesProcessed = 0;

      foreach($xboxGamesFromMetaCritic as $counter => $row) {   

        // adds an extra row..
        if(stripos($row, "Kinect Compatible") !== false) {
          $limit = 5;
        } else if(stripos($row, "Move Compatible") !== false) {
          $limit = 5;
        }

        if($x == $limit) {
          $x = 0;
          // get the game..
          // get the metacritic score..
          // echo "\n GAME :: ".$game." -- ".$blockTitle." (".$metaCriticScore.") ";

          $topGame = new TopGame();
          $topGame->title = $game;
          $topGame->block_title = $blockTitle;
          $topGame->meta_critic_score = $metaCriticScore;

          if(stripos($file, "ps3") !== false) {
            $platform = "PS3";
          } else if(stripos($file, "xbox") !== false) {
            $platform = "XBOX360";
          } else {
            die('UNKNOWN PLATFORM');
          }
          $topGame->platform = $platform;
          $topGame->save();
  #print_r($topGame->toArray());

          $limit = 4;
          $game = "";
          $blockTitle = "";
          $metaCriticScore = "";
          $gamesProcessed++;
          
#          if($gamesProcessed == 5) { die; }
          
        } else {
          if($x == $gamePosition) {
            $game = trim($row);
            $blockTitle = str_replace(" ","", strtoupper(preg_replace("/[^a-zA-Z0-9\s]/", "", $game)));
          }
          if($x == $metaPosition) {
            $metaCriticScore = trim(preg_replace('/[^\d\s]/', '', $row));
          }
          $x++;    
        }
      }     
    }    
  }
}
