<?php
echo "<style>
            body{
                background-color:#D1A6FF;
                font-size:25px;
            }
            </style>";
echo "Yepiee <br>";

// izveido asociatīvo masīvu, kurā atslēgas ir dažādu dzīvnieku nosaukumi, bet vērtības ir to skaņas.
  $dzivnieki = ["Kaķis" => "mjau", "Suns" => "vau", "Putns" => "Čiv"];
  print_r(array_keys($dzivnieki));
?>
