<?php

/**
 * EbayGameTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class EbayGameTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object EbayGameTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('EbayGame');
    }
    
    
    public static function getGameByGuid($guid)
    {
      $pdo = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
      $query = "SELECT id FROM ebay_games WHERE guid = '".$guid."'";
      $stmt = $pdo->prepare($query);

      $params = array(
        "guid"  => $guid
      );

      $stmt->execute($params);
      $results = $stmt->fetchAll(PDO::FETCH_COLUMN);  

      // return result
      return $results;
    }
    
    
    public static function getGames()
    {
      $pdo = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
      $query = "SELECT clean_title, current_price,end_time FROM ebay_games";
      $stmt = $pdo->prepare($query);

      $stmt->execute();
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);  
     // $stmt->fetchAll();
echo "<pre>";
print_r($results);
echo "</pre>";

      // return result
      return $results;
    }
}