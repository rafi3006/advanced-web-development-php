<?php

function getAgeGroup($age)
{
    if($age < 0){
        echo "Age cannot be negative. Please enter positve value.";
        return;
    }
    $catagory = "";

    if ($age < 13) {
        $catagory = "Child";
    } elseif ($age >= 13 && $age < 20) {
        $catagory = "Teenager";
    } elseif ($age >= 20 && $age < 65) {
        $catagory = "Adult";
    } else {
        $catagory = "Elderly";
    }

    echo "You are in $catagory catagory.";
}

getAgeGroup(-73);
?>