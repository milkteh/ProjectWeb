<?php
if (isset($_GET["id"])) {

    $id = $_GET["id"];
    
    $servername = "localhost";
    
    $username = "root";
    
    $password = "";
    
    $database = "fivestardb";
    
    // Create connection
    
    $connection = new mysqli ($servername, $username, $password, $database);
    
    $sql = "DELETE FROM hearingtest WHERE id=$id";
    
    $connection->query($sql);
    
    }
    
    header("location: record-hearingTest.php");
    
    exit;
    
    ?>