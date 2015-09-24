<?php

echo'hello world';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "markers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT id, name, address, lat, lng, type FROM markers";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "address: " . $row["address"]. "latitude: " . $row["lat"]. "longitude: " . $row["lng"]. "type: " . $row["type"]. "<br>";
    }
	
} else {
    echo "0 results";
}
$conn->close();
?>