<?php
    $auto["bmw"]=array("model"=>"X5","speed"=>"120","doors"=>"5","year"=>"2012");
    $auto["toyota"]=array("model"=>"camry","speed"=>"150","doors"=>"4","year"=>"2018");
    $auto["opel"]=array("model"=>"astra","speed"=>"130","doors"=>"3","year"=>"2017");

    foreach ($auto as $key=>$value )
    {
        echo $key ."<br>";

        foreach ($auto[$key] as $new_key=>$new_value)
        {
            echo $new_value ." ";
        }
        echo "<br><br>";
    }
