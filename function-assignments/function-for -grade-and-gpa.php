<?php 

    function getResult($marks){

        if($marks < 0){
            echo "Mark cannot be negative. Please enter positve value.";
            return;
        }
            $grade = "";
            $gpa = "";

        if($marks >= 0 && $marks <= 50){
            $grade= "F";
            $gpa = "0";
        }
        elseif($marks > 50 && $marks <= 60){
            $grade = "D";
            $gpa = "1";
        }
        elseif($marks > 60 && $marks <= 70){
            $grade = "C";
            $gpa = "2";
        }
        elseif($marks > 70 && $marks <= 75){
            $grade = "B";
            $gpa = "3";
        }
        elseif($marks > 75 && $marks <= 80){
            $grade = "A-";
            $gpa = "4";
        }
        elseif($marks > 80 && $marks <= 90){
            $grade = "A";
            $gpa = "5";
        }
        elseif($marks > 90 && $marks <= 100){
            $grade = "A+";
            $gpa = "Golden GPA";
        }
        else{
            $grade = "Invalid";
            $gpa = "Invalid";
        }
        
        echo "Your Grade is = $grade and <br> Your GPA is = $gpa <br>";
    }
        getResult(75);
?>