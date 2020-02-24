<?php
    echo '<table border="1">';
    for($i=1; $i<=10; $i++)
    {
        echo '<tr>';
        for ($b=1; $b<=10; $b++){
            if ($i%2===0 && $b%2===0){
                echo '<td>'."(".$i*$b.")".'</td>';}
            else{
                echo '<td>'."[".$i*$b."]".'</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>'


?>