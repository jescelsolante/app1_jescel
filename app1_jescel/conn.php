<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'jescel');
  define('DB_PASSWORD', '1234');
  define('DB_NAME', 'student');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>
