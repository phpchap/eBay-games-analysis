<?php

/**
 * graph actions.
 *
 * @package    ebay-games
 * @subpackage graph
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class graphActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->games = EbayGameTable::getGames();
    echo "<pre>";
    print_r($this->games);
    echo "</pre>";
  }
}
