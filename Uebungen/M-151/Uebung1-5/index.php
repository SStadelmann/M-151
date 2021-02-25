<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername" />
    <select name="klasse" id="klasse">
        <option value="D18a">D18a</option>
        <option value="D18b">D18b</option>
        <option value="D18c">D18c</option>
        <option value="D18d">D18d</option>
    </select>
    <input type="submit" value="Absenden" />
</form>


<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($_POST['name'] = ''){
            echo 'Geben Sie doch einen Namen ein, wenn sie so höflich sein würden. Sie können aber natürlich auch einfach einen falschen Namen angeben, denn das interessiert uns nicht wirklich';
        };
        else {
        $username = $_POST['name'];
        $klasse = $_POST['klasse'];
        echo "Hallo {$username}!";
        echo "Du besuchst die Klasse {$klasse}"
        };
    }
?>