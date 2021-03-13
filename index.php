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
?>

<div class="top__cover-image-container cover-display-all"></div>
<div class="row">
  <div class="col s12 m6 l4">
    <div class="card cyan lighten-2">
      <div class="card-content">
        <span class="card-title">Dashboard</span>
        <p>毎日の記録とTodoリスト</p>
      </div>
    </div>
  </div>
  <div class="col s12 m6 l4">
    <div class="card teal lighten-2">
      <div class="card-content">
        <span class="card-title">Goal Cards</span>
        <p>さまざまなカテゴリーの目標カード</p>
      </div>
    </div>
  </div>
  <div class="col s12 m6 l4">
    <div class="card red lighten-2">
      <div class="card-content">
        <span class="card-title">Study</span>
        <p>学びのレポート</p>
      </div>
    </div>
  </div>
</div>