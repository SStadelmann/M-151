<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<table>
<tr>
  <td>Id</td>
  <td>Nachname</td>
  <td> Vorname</td>
  <td><a>Bestellungen ansehen</a></td>
</tr>

<?php
$sql = "SELECT * FROM customers";
foreach($conn->query($sql) as $row) {
?>

  <tr>
    <td><?= $row['id'];?></td>
    <td><?= $row['last_name'];?></td>
    <td><?= $row['first_name'];?></td>
    <td><a href="bestellungen.php?id=<?= $row['id'];?>">Bestellungen ansehen</a></td>
  </tr>

<?php
}
?>
</table>