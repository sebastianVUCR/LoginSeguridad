<?php
Class Connect {
  function __construct(){
  }

  function __destruct(){
  }
  function connectar(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = '';
    $db = "gestorcitas";
    $conn =  mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
  }
}
?>