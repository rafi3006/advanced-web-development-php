<?php

    function info( string $name , int $birth_year){
        $age = date('Y') - $birth_year;
        echo "Hello I am $name, and I am $age years old.";
    }
    info("Rafiu", 1991);
?>