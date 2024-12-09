<?php
echo "<style>
            body{
                background-color:#D1A6FF;
                font-size:25px;
            }
            </style>";
echo "Yepiee <br>";

//Uzrakstiet programmu, kas izsauc API https://jsonplaceholder.typicode.com/posts 
// un iegūst masīvu ar asociatīvajiem masīviem, kas satur informāciju par ziņojumiem.
// Izvadiet katram ziņojumam tā nosaukumu, saturu un lietotāja ID, kas to ir izveidojis..
  $dataString = file_get_contents("https://jsonplaceholder.typicode.com/posts");
  $posts = json_decode($dataString);
  foreach ($posts as $post) {
      echo "$post->title<br>";
  }
?>
