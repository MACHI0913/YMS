<?php

/* Using root as log in*/
echo "hello from config file container from src <br>";

/*=== Db credentials for MySQL ===*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Blackpink12!');
define('DB_NAME', 'Yd_InvnDb');

/*=== Attempt to connect to MySQL DB ===*/
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/*=== check connection ===*/
if($mysqli == false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
}

$sql = "SELECT * FROM location";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Location ID:  " . $row["Location_ID"]. "  Location: " . $row["Location_name"]. "  Description: " . $row["Location_desc"]. "<br>";
    }
} 
else 
{
    echo "0 results";
}
$mysqli->close();
?>