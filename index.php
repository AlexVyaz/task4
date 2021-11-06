<?php

    $sum = 0;

    $items = ['where', 'is', 'my', 'money'];

    for($i = 0; $i <= 100; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
            shuffle($items);
        } elseif ($i % 3 == 0){
            echo 'Hello!' . '<br>';
        } elseif ($i % 5 == 0){
            $sum .= $i;
        }
    }
    foreach($items as $val){
        echo $val . ' ';
    }
    
?>