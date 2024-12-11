<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " .mysqli_connect_error());
    }
    echo '<div style="background-color: 
    #4CAF50; color: white; padding: 
    10px 20px; font-size: 18px; 
    font-weight: bold; border-radius: 5px; 
    text-align: center; margin-right: 150px;
    margin-bottom:500px">
          Connected successfully
      </div>';
?>
