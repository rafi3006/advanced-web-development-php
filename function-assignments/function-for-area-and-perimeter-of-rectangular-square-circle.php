<?php
    //Area of Rectangular
        function areaRectangular($length, $width){
            $area = $length * $width;
            return $area;
        }

        echo "<h3> Area of Rectangular: </h3><br>";
        echo "Area of rectangle is: " . areaRectangular(3, 4) . "<br>";  
    
    //Perimeter of Rectangle
        function perimeterRectangular($length, $width){
            $perimeter= (2*($length + $width));
            return $perimeter;
        }
        $length ="";
        $width = "";

        echo " <h3> Perimeter of Rectangle: </h3><br>";
        echo "Perimeter of rectangle is: " . perimeterRectangular(3, 5) . "<br>";

    //Area of Square
        function areaSquare($side){ 
            $area = $side * $side; 
            return $area; 
        } 

        $side = ""; 

        echo " <h3> Area of Square: </h3><br>";
        echo "Area of Square is: " . areaSquare(5) . "<br>"; 

    //Perimeter of Square
        function perimeterSquare($a){
            $perimeter= 4 * $a;
            return $perimeter;
        }
        $a ="";

        echo " <h3> Perimeter of Square: </h3><br>";
        echo "Perimeter of square is: " . perimeterSquare(3) . "<br>";

    // Area of Circle 
        function areaCircle( $r) { 
            $PI = 3.142; 
            return $PI * pow($r, 2); 
        } 
        
        echo " <h3> Area of Circle: </h3><br>";
        echo "Area of Circle is: " . areaCircle(5) . "<br>";
?>