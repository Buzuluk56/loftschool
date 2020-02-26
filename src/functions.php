<?php
/*
$mass=['Привет','мир','информатики'];
function MyFunction($mass, bool $param = null)
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
MyFunction($mass);
*/
function myFunc(... $x)
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
echo myFunc('/',25,5);

?>