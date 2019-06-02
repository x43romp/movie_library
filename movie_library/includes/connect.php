<?php

  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "movie_library";

  //Create connection

  $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

  //CHECK CONNECTION

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

