<?php include_once ( './includes/header.php' ); ?>
<?php include_once ( './includes/top.php' ); ?>
<section class="main-content-section container">
  <div class="row">
    <div class="col-md-9 search-form">
        <div class="row">
            <form action="search.php" id="form-search-by-id" class="col-sm-12">
              <div class="form-group">
                <input type="text" name="fingerprint" class="form-control" id="fingerprint" placeholder="Search by fingerprint">
              </div>
            </form>
            <form action="search.php" id="form-search-by-id" class="col-sm-12">
              <div class="form-group">
                <input type="text" class="form-control" name="person-id" placeholder="Enter id here">
              </div>
            </form>
        </div>
    </div>
    <div class="col-md-9 main-content">
      <!-- This will repeat for persons -->
      <?php
        if(!empty($_GET['c'])) {
          $titleText = $_GET['c'];
        }
      ?>

      <h2 class="section-title"><?php echo ucfirst($titleText); ?></h2>
      <?php
      print_r(showAllPersons());
      ?>
    </div> <!-- main-content -->
    <?php include_once ('./includes/sidebar.php'); ?>
  </div> <!-- row -->
</section> <!-- main-content-section -->

<?php include_once ( './includes/footer.php' ) ?>