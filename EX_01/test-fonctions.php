<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<?php
    include("affichage.php");
  $nom_produit='T-shirt femme';
  $couleur='Rouge';
  $prix=15.50;
  $disponible=true;
  $quantité=10;
  afficher_titre($nom_produit);
  afficher_descritpion($couleur,$prix);
  afficher_produit($nom_produit,$couleur,$prix,$disponible);
  ?>

  </body>
  </html>
  