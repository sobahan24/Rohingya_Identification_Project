<header class="header clear-fix">
  <?php 
      if($index) {
        include_once("./includes/slider-code.php");
      }
    ?>
    <div class="row">
      <section class="col-md-12 right-top-bar">
        <p class="text-right"><a href="#" title="To Support Rohingya, Donate here">Donate Here</a></p>
      </section> <!-- right-top-bar -->
    </div> <!-- .row -->

  <div class="logo-section container">
    <div class="row">
      <div class="col-md-2 col-md-3 col-xs-12"><a href="index.php"><img src="assets/img/logo.png" class="logo" alt="<?php echo $siteTitle; ?>"></a></div> <!-- logo -->
      <div class="col-md-10 site-title">
        <h2><?php echo $siteTitle; ?></h2>
      </div> <!-- /.site-title -->
    </div> <!-- row -->
  </div> <!-- logo-section -->
</header>
  <?php include_once ( './includes/nav.php' ); ?>