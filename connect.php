<?php 

function connect_db() {
    $servername = "localhost";
    $username = "a1800572";
    $password = "password";
    $dbname = "a1800572";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        
    }
    return $conn;
}
?>