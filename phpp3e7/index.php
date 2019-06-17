<!DOCTYPE html>
 <html lang="fr" dir="ltr" />
   <head>
     <meta charset="utf-8">
     <title>PHP part3 exo5</title>
   </head>
   <body>
     <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
    <?php
    for($x = 1; $x <= 100; $x = $x + 15){ ?>
     <p>On tient le bon bout</p>
       <?php }
    ?>
   </body>
 </html>
