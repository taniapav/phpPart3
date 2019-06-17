<?php
  $x = 0;
  $y = 40;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr" />
   <head>
     <meta charset="utf-8">
     <title>PHP part3 exo2</title>
   </head>
   <body>
     <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
        Tant que la première variable n'est pas supérieure à 20 :
        multiplier la première variable avec la deuxième
        afficher le résultat
        incrementer la première variable
     </p>
    <?php
     while($x <= 20){ ?>
     <p> <?= $x * $y ?></p> 
       <?php $x++;
     }
    ?>
   </body>
 </html>
