<?php
    // Writen By: Rafiu //
    $i = 3000;
    $count = 2;
    while($i < 3020){
        if ($count % 2 == 0) {
            echo "$count is Even Number <hr>";
        }else{
            echo "$count is Odd Number <hr>";
        }
        $i++;
        $count++;
    }  
?>