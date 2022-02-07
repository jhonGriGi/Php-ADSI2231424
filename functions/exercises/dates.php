<?php
function dateFormats() {
    $hoy = date("F j, Y, g:i a");      
    echo "<h4 class='my-3'>Formato de fecha 'F j, Y, g:i a':</h4> ";           // March 10, 2001, 5:16 pm
    echo "March 10, 2001, 5:16 pm",$hoy, "<br>";

    echo "<h4 class='my-3'>Formato de fecha 'm.d.y':</h4> ";           // March 10, 2001, 5:16 pm
    $hoy = date("m.d.y");                         // 03.10.01
    echo "03.10.01",$hoy, "<br>";

    echo "<h4 class='my-3'>Formato de fecha 'j, n, Y':</h4> ";           // March 10, 2001, 5:16 pm
    $hoy = date("j, n, Y");                       // 10, 3, 2001
    echo "10, 3, 2001",$hoy, "<br>";

    echo "<h4 class='my-3'>Formato de fecha 'Ymd':</h4> ";           // March 10, 2001, 5:16 pm
    $hoy = date("Ymd");                           // 20010310
    echo "20010310",$hoy, "<br>";

    echo "<h4 class='my-3'>Formato de fecha 'h-i-s, j-m-y, it is w Day':</h4> ";           // March 10, 2001, 5:16 pm
    $hoy = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
    echo "05-16-18, 10-03-01, 1631 1618 6 Satpm01",$hoy, "<br>";

    echo "<h4 class='my-3'>Formato de fecha '\i\t \i\s \t\h\e jS \d\a\y.':</h4> ";           // March 10, 2001, 5:16 pm
    $hoy = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
    echo "it is the 10th day.",$hoy, "<br>";

    echo "<h4 class='my-3'>Formato de fecha 'D M j G:i:s T Y':</h4> ";           // March 10, 2001, 5:16 pm
    $hoy = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
    echo "Sat Mar 10 17:16:18 MST 2001",$hoy, "<br>";

    echo "<h4 class='my-3'>Formato de fecha 'H:m:s \m \i\s\ \m\o\n\t\h':</h4> ";           // March 10, 2001, 5:16 pm
    $hoy = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
    echo "17:03:18 m is month",$hoy, "<br>";

    echo "<h4 class='my-3'>Formato de fecha 'H:i:s':</h4> ";           // March 10, 2001, 5:16 pm
    $hoy = date("H:i:s");                         // 17:16:18
    echo "17:16:18",$hoy, "<br>";

    echo "<h4 class='my-3'>Formato de fecha 'Y-m-d H:i:s':</h4> ";           // March 10, 2001, 5:16 pm
    $hoy = date("Y-m-d H:i:s");  
    echo "2001-03-10 17:16:18 (el formato DATETIME de MySQL)",$hoy, "<br><br>";  
                   // 2001-03-10 17:16:18 (el formato DATETIME de MySQL)
}