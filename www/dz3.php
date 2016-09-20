<?php
    $date = array(rand(1,time()),
                  rand(1,time()),
                  rand(1,time()),
                  rand(1,time()),
                  rand(1,time())
                 );

    $min_day = min(date('d',$date[0]),
                   date('d',$date[1]),
                   date('d',$date[2]),
                   date('d',$date[3]),
                   date('d',$date[4])
                   );               
    echo 'Минимальный день: '.$min_day;
    echo "</br>";
    $max_m = max(date('m',$date[0]),
                 date('m',$date[1]),
                 date('m',$date[2]),
                 date('m',$date[3]),
                 date('m',$date[4])
                );
    echo 'Наибольший месяц: '.$max_m;
    echo "</br>";
    
    sort($date);
    
    $selected = array_pop($date);
    
    echo date('l d.m.Y H:i:s',$selected);
    echo "</br>";
    echo date_default_timezone_get()."</br>";
    echo date_default_timezone_set('America/New_York')."</br>";
    echo date_default_timezone_get();