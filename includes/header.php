<?php
ini_set("display_errors", "On");
error_reporting(0);
require_once ('functions.php');
$isServer = false;
$recentEvents = false;
$siteTitle = "Rohingya Information System";
$index = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rohingya Information System</title>
  <!-- Bootstrap CSS -->
  <?php if($isServer) { ?>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <?php } else { ?>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <?php } ?>
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/TrajanPro-Bold.css">
  <!-- ninja slider -->
  <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
  <!-- Styles CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">
  <?php if(isset($index)):?>
    <link rel="stylesheet" href="assets/css/slider-css.css">
  <?php endif; ?>
  <link href="//fonts.googleapis.com/css?family=Lato:400,100,300italic,300" rel="stylesheet" type="text/css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>