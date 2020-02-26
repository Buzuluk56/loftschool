<?php

$mass=['Привет','мир','информатики'];
function task1($mass, bool $param = null)
{
    foreach ($mass as $value) {
        if ($param === true) {
            echo $value;
        } else {
            $res = "<p>" . $value . "</p>";
            echo $res;
        }
    }
}
task1($mass);


function task2(... $x)
{
    $operation = $x[0];
    $result = 0;
    if ($operation == '+') {
        for ($i = 1; $i < sizeof($x); $i++) {
            $result += $x[$i];
        }
    } elseif ($operation == '*') {
        $result = 1;
        for ($i = 1; $i < sizeof($x); $i++) {
            $result *= $x[$i];
        }
    } elseif ($operation == '-') {
        $result = $x[1];
        for ($i = 1; $i < sizeof($x); $i++) {
            $result -= $x[$i+1];
        }
    }elseif ($operation == '/') {
        $result = $x[1];
        for ($i = 2; $i < sizeof($x); $i++) {
            $result /= $x[$i];
        }
    }
        return $result;

}
echo task2('/',5,5);

function task3($i,$j)
{
    echo '<table border="1">';
    for($a=1; $a<=$i; $a++)
    {
        echo '<tr>';
        for ($b=1; $b<=$j; $b++){
            echo '<td>'.$a*$b.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
task3(2,2);
?>