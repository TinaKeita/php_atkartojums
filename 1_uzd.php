<?php
echo "<style>
body{
    background-color:#D1A6FF;
    font-size:25px;
}
</style>";
echo "Yepiee <br>";

// FOR CIKLS
 for ($i = 0; $i <= 100; $i+=2){
     echo "Skaitlis ir: $i<br>";
 }

//WHILE CIKLS
 $y = 1;
 while ($y <= 100){
     if ($y % 2 == 0){
         echo "Skaitlis ir $y<br>";
     }
     $y = $y + 1;
 }
// 5 % 4 izvada 1 proti atlikumu kāds sanāk pēc tuvākā dalījuma veikšanas
?>