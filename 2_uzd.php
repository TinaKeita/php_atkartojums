<?php
echo "<style>
body{
    background-color:#D1A6FF;
    font-size:25px;
}
</style>";
echo "Yepiee <br>";

// FAKTORIALS 10 
//3! = 1*2*3
 $faktorials = 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10;
echo ($faktorials),"<br>";
$f = 1; // faktoriāla sākuma vērtība
 for ($i = 1; $i <= 10; $i = $i + 1){
     $f = $f * $i;
 }
 echo ($f), "<br>";

 // SASKAITIT VISUS CIPARUS NO 1 - 22
 $a = 0;
 for ($i = 1; $i <= 22; $i = $i + 1){
     $a = $a + $i;
 }
 echo ($a),"<br>";
?>