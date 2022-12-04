<?php include_once ( './includes/header.php' ); ?>
<?php include_once ( './includes/top.php' ); ?>
    <section class="main-content-section container">
        <div class="row">
            <div class="col-md-9 search-form">
                <div class="row">
                    <div class="col-md-6">
                        <form action="#" id="form-search-by-id">
                            <div class="form-group">
                                <input type="text" name="fingerprint" class="form-control" id="fingerprint" placeholder="Search by fingerprint">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 search-by-id">
                        <form action="#" id="form-search-by-id">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search-user" name="person-id" placeholder="Enter id here">
                            </div>
                        </form>
                    </div>
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
                if(isset($_GET["person-id"])) {
                   $personId = sanitize($_GET["person-id"]);
                   $personDetails = searchPersonById($personId);
                   if(is_array($personDetails)) {
                     ?>
                       <div class="person-info">
                           <div class="row">
                               <div class="col-md-3 col-sm-3">
                                   <img src="assets/img/persons/<?php echo $personDetails['personId']; ?>.png" alt="Person Name" class="person-thumb center">
                               </div>
                               <div class="col-md-7 person-details">
                                   <p class="person-id">ID No: <?php echo $personDetails['personId']; ?></p>
                                   <p class="person-name"><?php echo $personDetails['pname']; ?></p>
                                   <p class="person-father">Father's Name: <?php echo $personDetails['pfather']; ?></p>
                                   <p class="person-mother">Mother's Name: <?php echo $personDetails['pmother']; ?></p>
                                   <p class="person-gender">
                                       Gender: <?php echo whichGender($personDetails['pgender']); ?></p>
                                   <p class="person-gender">
                                       Religion: <?php echo whichReligion($personDetails['religion']); ?></p>
                                   <p class="person-dob">Date of birth: <?php echo $personDetails['dob']; ?></p>
                                   <p class="person-blood">Blood Group: <?php echo $personDetails['blood']; ?></p>
                               </div>
                               <div class="col-md-2 show-person-details">
                                   <a href="#">View Details</a>
                               </div>
                           </div>
                       </div>
                     <?php
                   }else {
                       echo $personDetails;
                   }
                }
              ?>
            </div> <!-- main-content -->
          <?php include_once ('./includes/sidebar.php'); ?>
        </div> <!-- row -->
    </section> <!-- main-content-section -->

<?php include_once ( './includes/footer.php' ) ?>