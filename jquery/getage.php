<?php

    $age = $_GET['age'];

    if($age >= 55)
    {
        echo 'Hey, you can vote';
    }
    else
    {
        echo 'Hey, you are not allowed to vote yet!';
    }

?>