<?php
require 'DB.php';
$db = DB::get();
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


foreach($db->select($sql, []) as $row) {
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

