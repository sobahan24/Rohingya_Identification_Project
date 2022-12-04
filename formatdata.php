<?php
ini_set("display_errors", "On");
error_reporting(1);
$feedUrl = "rohingyadata.xml";
$db = new mysqli("localhost", "root", "root", "rohingya");

function t($data) {
  return ucwords(trim($data));
}

function convertDate($data) {
  $date = DateTime::createFromFormat("d/m/Y", $data);
  return $date->format('Y-m-d');
}

function gender($data) {
  if(strtolower($data) == 'male') {
    return 1;
  } else {
    return 0;
  }
}

function religion($data) {
  switch (strtolower($data)) {
    case 'muslim':
    case 'islam':
    return 1;
    break;
    case 'hindu':
      return 2;
      break;
    case 'kristian':
      return 3;
      break;
    default:
      return 4;
      break;
  }
}
function insertToDatabase($sql) {
  global $db;
  if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
}


function checkNameError($data) {
  $dataArray = explode(".", $data);
  foreach ($dataArray as $key => $fieldData) {
    $dataArray[$key] = t($fieldData);
  }
  return implode(". ", $dataArray);

}

function updateDatabase($fieldName, $fieldData, $idNumber) {
  global $db;
  if(!empty($fieldData) && !empty($fieldData)) {
    $sqlUpdate = "UPDATE person SET `$fieldName` = '$fieldData' WHERE `id`=$idNumber";
    if ($db->query($sqlUpdate) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error: " . $sqlUpdate . "<br>" . $db->error;
    }
  }
}
if(!$xml = simplexml_load_file($feedUrl)) {
  die("Data not loaded");
}

if(!$db) {
  die("Database not connected");
}

$idNumber = 1;
foreach($xml->Persons->Person as $person) {
  $name = t($person->name);
  $father = t($person->father);
  $mother = t($person->mother);
  $gender = gender(t($person->gender));
  $dob = convertDate(t($person->dateofbirth));
  $blood = strtoupper(t($person->blood));
  $religion = religion(t($person->religion));

  //echo "Gender is: {$gender} <br> Religion is {$religion}";

  updateDatabase("pname", checkNameError($name), $idNumber);
  updateDatabase("pfather", checkNameError($father), $idNumber);
  updateDatabase("pmother", checkNameError($mother), $idNumber);
  $idNumber++;
}

$db->close();
?>





