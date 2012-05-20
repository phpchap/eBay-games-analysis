<?php
// Using the optional flags parameter since PHP 5
$xboxGamesFromMetaCritic = file('xbox_games_list.txt');
$sizeOfXboxGamesList = count($xboxGamesFromMetaCritic);
$x = 0;
$gamePosition = 1;
$metaPosition = 2;
$limit = 6;
$gamesProcessed = 0;

foreach($xboxGamesFromMetaCritic as $counter => $row) {   
  if($x == $limit) {
    $x = 0;
    $game = "";
    $metaCritic = "";
    $gamesProcessed++;
  } else {
    if($x == $gamePosition) {
      $game = $row;
    }
    if($x == $metaPosition) {
      $metaCriticScore = $row;
    }
    $x++;    
  }
  if($counter==16) { die; }
}