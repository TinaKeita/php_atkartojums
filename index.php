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
// $faktorials = 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10;
// echo ($faktorials),"<br>";
// $f = 1; // faktoriāla sākuma vērtība
// for ($i = 1; $i <= 10; $i = $i + 1){
    // $f = $f * $i;
// }
// echo ($f), "<br>";

// SASKAITIT VISUS CIPARUS NO 1 - 22
// $a = 0;
// for ($i = 1; $i <= 22; $i = $i + 1){
    // $a = $a + $i;
// }
// echo ($a),"<br>";

//FIBANOČI līdz 1000 / 1 1 2 3 5 8 
$b_1 = 1;
for ($b = 1; $b <= 1000; $b = $b + 0){
    echo "$b <br>";
    $b_plus_1 = $b_1 + $b;
    $b_1 = $b;
    $b = $b_plus_1;
}



// FOR CIKLS
// for ($i = 0; $i <= 100; $i+=2){
    // echo "Skaitlis ir: $i<br>";
// }

//WHILE CIKLS
// $y = 1;
// while ($y <= 100){
    // if ($y % 2 == 0){
        // echo "Skaitlis ir $y<br>";
    // }
    // $y = $y + 1;
// }
// 5 % 4 izvada 1 proti atlikumu kāds sanāk pēc tuvākā dalījuma veikšanas

?>
