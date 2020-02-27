<?php
// Задание №4, ДЗ №2
 date_default_timezone_set('Asia/Yekaterinburg');
 $a = Date(d.".".m.".".Y." ".H.":".i);
 echo $a . "<br>";

 $time = mktime(00,00,00,2,24,2016);
 echo $time. "<br>";

// Задание №5, ДЗ №2
 $string="Карл у Клары украл Кораллы";
 $string=mb_strtolower($string);

 echo $string."<br>";

 $str="Две бутылки лимонада";
 $str2=str_replace("Две","Три",$str);

 echo $str."<br>".$str2;

 // Задание №6, ДЗ №2
 $text="Hello algain!";
 $fp= fopen("text.txt", "w");
 fwrite($fp,$text);
 fclose($fp);

function task4($fp)
{
    $fh=fopen($fp,'r') or die("Файл не существует");
    $line=fgets($fh);
    fclose($fh);
    echo  $line;

}

task4("text.txt");
 
?>