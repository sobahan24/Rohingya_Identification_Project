<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "root");
define("DB", "rohingya");

$conn = mysqli_connect(HOST, USER, PASS, DB);

if(mysqli_connect_error()) {
  die("Database connection error");
}