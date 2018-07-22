<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO affiliate(pname, pdescription, estamnt, plink, pimage)
VALUES ('dsdbc', 'dscbdh', 1213, "www.amazon.com", );";

if ($conn->multi_query($sql) === TRUE) {
   echo "New records created successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
