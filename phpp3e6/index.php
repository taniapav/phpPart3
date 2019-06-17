<!DOCTYPE html>
 <html lang="fr" dir="ltr" />
   <head>
     <meta charset="utf-8" />
     <title>PHP part3 exo6</title>
   </head>
   <body>
     <p>En allant de 20 à 0 avec un pas de 1, afficher le message 
        C'est presque bon.
     </p>
    <?php
    for($x = 20; $x >=0; $x--){ 
      ?>
        <p>C'est presque bon.</p>
          <?php }
    ?>
   </body>
 </html>
