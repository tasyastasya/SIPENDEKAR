<?php
// Sesuaikan dengan setting MySQL
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "karanganyar";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM kec";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table border='1px'><tr>
<th>Nama Kecamatan</th>
<th>Longitude</th>
<th>Latituude</th>";
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["Nama_Kecamatan"]."</td><td>".
 $row["Longitude"]."</td><td>".
 $row["Latitude"]."</td><td>";
}
 echo "</table>";
} else {
echo "0 results";
}
$conn->close();
?>
