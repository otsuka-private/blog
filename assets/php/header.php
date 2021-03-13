<?php
$rootURL = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>自分用サイト</title>

  <link rel="icon" type="image/png" href="https://otsuka-blog.com/assets/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css">
  <link rel="stylesheet" href="<?php echo "https://$rootURL/assets/styles/stylesheet.min.css"; ?>">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="<?php echo "https://$rootURL/assets/scripts/index.js"; ?>" defer type="module"></script>

  <?php
  $pathToIndexJavaScriptFile = "./assets/scripts/index.js";
  $doesFileExist = file_exists($pathToIndexJavaScriptFile);
  if ($doesFileExist) {
    echo '<script src="./assets/scripts/index.js" defer type="module"></script>';
  }
  ?>
</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <a href="https://otsuka-blog.com/" class="brand-logo center">Record</a>
      <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo "https://$rootURL/dashboard/"; ?>"><i class="far fa-chart-bar"></i></a></li>
        <li><a href="<?php echo "https://$rootURL/goal-cards/"; ?>"><i class="fas fa-layer-group"></i></a></li>
        <li><a href="<?php echo "https://$rootURL/study/"; ?>"><i class="fas fa-pen-fancy"></i></a></li>
      </ul>
    </div>
  </nav>
  <ul class="sidenav" id="mobile-menu">
    <li><a href="<?php echo "https://$rootURL/dashboard/"; ?>"><i class="far fa-chart-bar"></i>記録ボード</a></li>
    <li><a href="<?php echo "https://$rootURL/goal-cards/"; ?>"><i class="fas fa-layer-group"></i>目標カード</a></li>
    <li><a href="#"><i class="fas fa-pen-fancy"></i>勉強</a></li>
  </ul>