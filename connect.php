<?php 

function connect_db() {
    $servername = "localhost";
    $username = "cards";
    $password = "password";
    $dbname = "cards";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        
    }
    return $conn;
}
?>