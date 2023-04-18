<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "shop";

    // Create connection เชื่อมต่อกับฐานข้อมูล
    //MySQLi Procedural
    //$conn = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);
    // Check connection
    /*if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
        //echo "<center>Connected successfully</center>";//เชื่อมต่อได้*/

    //MySQLi Object-Oriented
    $conn = new mysqli($servername, $dbusername,$dbpassword,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        //echo "Connected successfully";
?>
