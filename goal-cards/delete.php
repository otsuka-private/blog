<?php
// require header.php
$exploded = explode('/', $_SERVER['REQUEST_URI']);
$stepsToRoot = count($exploded) - 2;
$prefixIshPath = '';
for ($i = 0; $i < $stepsToRoot; $i++) {
    $prefixIshPath = $prefixIshPath . '../';
}
$targetURLToHeaderPHPFile = $prefixIshPath . 'assets/php/header.php';
require($targetURLToHeaderPHPFile);

$targetURLToDeletePHPFile = $prefixIshPath . 'goal-cards/assets/php/delete.php';
require($targetURLToDeletePHPFile);
