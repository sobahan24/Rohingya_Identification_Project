<div class="navbar-container container">
        <nav class="main-nav navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-to-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse navbar-to-collapse">
            <ul class="nav navbar-nav">
              <li><a class="active" href="index.php">Home</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Camps<b class="caret"></b></a>
                <ul class="drop-down-menu dropdown-menu">
                    <?php
                        show_all_camps();
                    ?>
                </ul>
              </li>
              <li><a   href="./gallery.php">Gallery</a></li>
              <li><a   href="./about-us.php">About Us</a></li>
              <li><a   href="./contact-us.php">Contact Us</a></li>
            </ul>
          </div>
        </nav>
        <!-- /.main-nav -->
      </div> <!-- /.navbar-container /.container -->