<?php
    $x = intval($x);
    $x = $_GET['x'];
    $y = intval($y);
    $y = $_GET['y'];

    $mode = $_GET['mode'];
    if($mode = 'plus') {
        echo($x + $y)
    };
    elseif($mode = 'minus') {
        echo($x-$y)
    };
    elseif($mode = 'multi') { 
        echo($x*$y)
    };
    elseif($mode = 'div') {
        echo($x/$y)
    };