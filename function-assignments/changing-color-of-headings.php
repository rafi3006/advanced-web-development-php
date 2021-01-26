<?php

    function amarHeader($head, $tag ="h1",  $align = 'center', $color = '#333'){
        echo "<$tag style=\" text-align:$align; color=$color;\">$head</$tag>";
    }

    amarHeader('Our Group', 'h1','left', 'red');
    amarHeader('Our Group', 'h2','center', 'blue');
    amarHeader('Our Group', 'h3','right', 'yellow');
    amarHeader('Our Group', 'h4','center', 'grey');
    amarHeader('Our Group', 'h5','left', 'pink');
    amarHeader('Our Group', 'h6','center', 'orange');

?>