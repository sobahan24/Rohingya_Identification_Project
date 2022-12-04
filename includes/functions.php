<?php
require_once ( 'db.php');
$siteTitle = "Rohingya Information System";
function set_sitebar_section ($reverse = 0) {

}

function set_site_title ($isLinked = 0) {
  if($isLinked) {
    echo "<a href=\"\#\">{$siteTitle}</a>";
  }
}


function sanitize($string){
  global $conn;
  $blacklist = array("<script>", "</script>");
  $whitelist = array();
  $data = trim($string);
  $data = str_replace("<script>", htmlspecialchars("<script>"), $data);
  $data = str_replace("</script>", htmlspecialchars("</script>"), $data);
  $data = mysqli_real_escape_string($conn, $data);
  return $data;
}

function validateData($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function pass($password = ""){
  $preSalt = "thefox";
  $postSalt = "thedog";
  $newPass = $preSalt . $password . $postSalt;
  $hashed_pass = hash("ripemd256", $newPass);
  return $hashed_pass;
}

function redirect($location = "/"){
  header("Location:" . $location);
}


function sanitizeLink($link){
  $link = htmlspecialchars($link);
  return $link;
}

function show_all_camps() {
  global $conn;
  $sql = "SELECT * FROM camps";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo '<li><a href="camp.php?c='. $row["campName"] .'">'. $row["campName"] .'</a></li>';
    }
  }
}

function showTotal() {
  global $conn;
  $sql = "SELECT * FROM camps";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $row['campName']; ?></td>
        <td><?php echo $row['total']; ?></td>
      </tr>



      <?php
    }
  }
}

function updateDatabase($fieldName, $fieldData, $idNumber) {
  global $conn;
  if(!empty($fieldData) && !empty($fieldData)) {
    $sqlUpdate = "UPDATE person SET `$fieldName` = '$fieldData' WHERE `id`=$idNumber";
    if (mysqli_query($conn, $sqlUpdate) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error: " . $sqlUpdate . "<br>" . mysqli_error($conn);
    }
  }
}

function updateIdNumber() {
  global $conn;
  $sql = "SELECT * FROM person";
  $result = mysqli_query($conn, $sql);
  $data = date("Ymd");

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      updateDatabase('personId',$data.$row['id'],$row['id']);
    }
  }
}

function searchPersonById($personId) {
  global $conn;
  $sql = "SELECT * FROM person WHERE `personId` = '$personId'";
  $result = mysqli_query($conn, $sql);
  $data = date("Ymd");

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      return $row;
    }
  } else {
    return "<h2 class=\"bg-danger\">Sorry! Check your criteria.</h2>";
  }
}

function showAllPersons() {
  global $conn;
  $sql = "SELECT * FROM person ORDER BY id DESC";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="person-info">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <img src="assets/img/persons/<?php echo $row['personId']; ?>.png" alt="<?php echo $row["pname"]; ?>" class="person-thumb center">
          </div>
          <div class="col-md-7 person-details">
            <p class="person-id">ID No: <?php echo $row['personId']; ?></p>
            <p class="person-name"><?php echo $row['pname']; ?></p>
            <p class="person-father">Father's Name: <?php echo $row['pfather']; ?></p>
          </div>
          <div class="col-md-2 show-person-details">
            <a href="./search.php?person-id=<?php echo $row['personId'] ?>">View Details</a>
          </div>
        </div>
      </div>
      <?php
    }
  } else {
    return "<h2 class=\"bg-danger\">Sorry! Check your criteria.</h2>";
  }
}
function whichGender($genderId) {
  return $genderId == 0 ? "Female" : "Male";
}

function whichReligion($id) {
  switch($id) {
    case 1:
      return "Islam";
      break;
    case 2:
      return "Hindu";
      break;
    case 3:
      return "Kristian";
      break;
    case 4:
      return "Others";
      break;
  }
}



