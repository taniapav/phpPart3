<?php
  $x = 100;
  $y = 1;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr" />
   <head>
     <meta charset="utf-8">
     <title>PHP part3 exo3</title>
   </head>
   <body>
     <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
        Tant que la première variable n'est pas inférieure ou égale à 10 :
        multiplier la première variable avec la deuxième
        afficher le résultat
        décrémenter la première variable
     </p>
    <?php
     while($x > 10){ ?>
     <p><?= $x * $y ?></p> 
       <?php $x--;
     }
    ?>
   </body>
 </html>
