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
  <td>Datum</td>
  <td>Bezahlungsmethode</td>
  <td><a>Bestellung löschen</a></td>
</tr>

<?php
$sql = "SELECT * FROM orders";


foreach($conn->query($sql) as $row) {
?>

<tr>
    <td><?= $row['id'];?></td>
    <td><?= $row['product_name'];?></td>
    <td><?= $row['first_name'];?></td>
    <td><a href="delete.php?id=<?= $row['id'];?>">Bestellungen löschen</a></td>
</tr>

<?php
    }
?>

</table>

