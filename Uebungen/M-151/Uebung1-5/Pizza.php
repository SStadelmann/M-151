<h1>Deine Pizze besteht aus:</h1>
<ul>
</ul>



<form method="POST" action="?">
    <input type="text" name="topping" placeholder="enter topping" />
    <input type="submit" value="add Topping to Pizza" />
</form>

<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_POST['topping'] = ''){
                echo 'Bitte etwas eingeben';
            };
            else {
            $topping = $_POST['topping'];
            echo <li>"{$topping}"</li>;
?>