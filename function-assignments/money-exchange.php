<?php 
    function currency($BDT){
        $USD= $BDT * 0.0118;
        $canadianDollar= $BDT * 0.015;
        $GBP= $BDT * 0.0086;
        
        echo "the value of $BDT tk is $USD USD, $canadianDollar Canadian Dollars and $GBP GBP";
    }
    currency(100);
    echo "<br>";
    currency(10000);
?>