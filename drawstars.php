<?php
    function draw_stars($x){
        foreach($x as $value){
            for($i=1; $i<=$value; $i++){
                echo "*";
            }
            echo "<br>";
        }
    }

    function more_stars($y){
        foreach($y as $value){
            if(is_numeric($value)){
                for($i=1; $i<=$value; $i++){
                echo "*";
                }
                echo "<br>";
            } else {
                for($i=1; $i<=strlen($value); $i++){
                    echo strtolower($value[0]);
                }
                echo "<br>";
            }
        }
    }
    $x=array(5,7,9,2);
    $y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
    //draw_stars($x);
    more_stars($y);
?>