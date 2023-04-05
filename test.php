<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "paypalooza";

// maak connectie
$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// Lees elke regel van de database tabel.
$sq1 = "SELECT * FROM users";
$result = $connection->query($sq1);

//controleer de connectie
if (!$result) {
die("invalid: " . $connection->error);
}
while ($row = $result->fetch_assoc()){
  echo "<tr>
  <td>" .$row["id"] . "</td>
  <td>" .$row["username"] . "</td>
  <td>" .$row["password"] . "</td>
  <td>" .$row["sign up"] . "</td>

  </tr>";

}
?>