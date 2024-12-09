<?php
echo "<style>
body{
    background-color:#D1A6FF;
    font-size:25px;
}
</style>";
echo "Yepiee <br>";

//FIBANOČI līdz 1000 / 1 1 2 3 5 8 
 $b_1 = 0;
 for ($b = 1; $b <= 1000; $b = $b + 0){
     echo "$b <br>";
     $b_plus_1 = $b_1 + $b;
     $b_1 = $b;
     $b = $b_plus_1;
 }
?>