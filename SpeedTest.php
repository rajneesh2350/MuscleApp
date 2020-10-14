<?php
//header("Refresh:2; url=page2.php");
header("Refresh:1;");
 $kb=512;
    echo "Streaming $kb Kb...<!-";
    flush();
    $time = explode(" ",microtime());
    $start = $time[0] + $time[1];
    for($x=0;$x<$kb;$x++){
        echo str_pad('', 1024, '.');
        flush();
    }
    $time = explode(" ",microtime());
    $finish = $time[0] + $time[1];
    $deltat = $finish - $start;
//    echo "-> Test finished in $deltat seconds. Your speed is ". round(round($kb / $deltat, 2)/1024,2)."Kb/s";
      echo "->". round(round($kb / $deltat, 2)/1024,2)."Kb/s";
?>
