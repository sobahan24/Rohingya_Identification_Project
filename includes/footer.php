  <section class="footer">
  <footer class="container">
    <div class="row">
      <div class="col-md-6 copyright-text">
        <p>&copy; Copyright <?php echo $siteTitle; ?></p>
      </div>
      <div class="col-md-6 footer-social-links text-right">
          <ul class="social-link">
            <li><a class="facebook hasTooltip" href="#" target="_self"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter hasTooltip" href="#" target="_self"><i class="fa fa-twitter"></i></a></li>
            <li><a class="google-plus hasTooltip" href="#" target="_self"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="pinterest hasTooltip" href="#" target="_self"><i class="fa fa-pinterest"></i></a></li>
          </ul>
      </div>
    </div>
  </footer>
</section>

  <!-- jQuery -->
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <?php if($isServer) { ?>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <?php } else { ?>
    <script src="assets/js/bootstrap.min.js"></script>
  <?php } ?>

  <?php if($index) :?>
    <script type="text/javascript" src="assets/js/jssor.slider.min.js"></script>
    <script src="assets/js/slider-script.js"></script>
  <?php endif; ?>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="Hello World"></script>
  <!-- mainJS file -->
  <script src="assets/js/scripts.js"></script>
</body>
</html>