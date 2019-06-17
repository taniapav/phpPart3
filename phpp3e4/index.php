<?php
  $x = 1;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr" />
   <head>
     <meta charset="utf-8">
     <title>PHP part3 exo4</title>
   </head>
   <body>
     <p>Créer une variable et l'initialiser à 1.
        Tant que cette variable n'atteint pas 10, il faut :
        l'afficher
        l'incrementer de la moitié de sa valeur
     </p>
    <?php
    while($x < 10){ ?>
     <p><?= $x ?></p>
       <?php $x += ($x/2);
    }
    ?>
   </body>
 </html>
