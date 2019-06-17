<?php
  $x = 0;
 ?> <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP part3 exo1</title>
   </head>
   <body>
     <p>Créer une variable et l'initialiser à 0.
         Tant que cette variable n'atteint pas 10, il faut :
         l'afficher
         l'incrementer
</p>
     <?php
     while($x <= 10){ ?>
     <p><?= $x ?></p> 
       <?php $x++;
     }
      ?>
   </body>
 </html>
