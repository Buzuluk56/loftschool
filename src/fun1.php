<?php
$mass=['Привет','мир','информатики'];

function MyFunction($x){
    foreach ($x as $value){
        echo "<p>".$value. "</p>";
    }
}
MyFunction($mass);

?>