<?php
echo "<style>
            body{
                background-color:#D1A6FF;
                font-size:25px;
            }
            </style>";
echo "Yepiee <br>";

//IZVADI VISUS SKAITUS NO 1 - 100 KAS DALĀS AR 3 VAI 5 BET NEDALĀS AR 15;
    for ($i = 1; $i <= 100; $i =  $i + 1){
        if(($i % 3 == 0 || $i % 5 == 0) && $i % 15 ==! 0){
            echo "$i <br>";
        }
    }
?>
