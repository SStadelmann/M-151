<?php
require 'DB.php';
$db = DB::get();
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
foreach($db->select($sql, []) as $row) {
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