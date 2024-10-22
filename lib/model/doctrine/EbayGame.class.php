<?php

/**
 * EbayGame
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ebay-games
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class EbayGame extends BaseEbayGame
{  
  private $min_current_price = "300";
  private $min_bid_count = "2";
  private $min_feedback_score = "20";
  private $min_score = "10";
  private $score = ""; 
  
  /**
   * based on the data thats set in this class, we can come up with a kind of score that
   * will allow a save to the database  
   */
  public function calculateScore()
  {
    // 
    $this->score = 0;
    $multiplier = 0;
    
    // if the current price is above a minimum price
    if(isset($this->current_price) && ($this->current_price >= $this->min_current_price)) {
      $price_divider = round(($this->current_price / $this->min_current_price));
      $this->score = $this->score + $price_divider; 
    }
 
    // if the bid count is above a minimum bid count
    if(isset($this->bid_count) && ($this->bid_count >= $this->min_bid_count)) {
      $bid_count_divider = round(($this->bid_count / $this->min_bid_count));
      $this->score = $this->score + $bid_count_divider;
    }
    
    // if the feedback score is above a minimum feedback score
    if(isset($this->feedback_score) &&  ($this->feedback_score >= $this->min_feedback_score)) {
      $feedback_score_divider = round(($this->feedback_score / $this->min_feedback_score));
      $this->score = $this->score + $feedback_score_divider;
    }
    
    return $this->score;
  }
  
  // before we attempt a save, figure out the quality of this game before persisting it..
  public function save(Doctrine_Connection $conn = null) 
  {
    $this->calculateScore();
    
    if($this->score >= $this->min_score) {
      parent::save(); 
    }
  }
}
