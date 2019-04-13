<?php


$string = "Vestibulum ante ipsum primis Drupal 7 faucibus orci luctus et ultrices posuere Drupal 10 cubilia Curae; Morbi euismod drUpal9 iaculis sem a gravida drupal6. ";

preg_match_all("/drupal ?[0-9]{1,}/i", $string, $matches);

echo preg_replace("/(drupal)( ?)([0-9]{1,})/i", "Drupal-$3", $string);	