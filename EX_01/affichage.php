<?php
function afficher_titre($nom_produit) {
    echo"<h1>Fiche produit: $nom_produit </h1>";
return;
}

function afficher_descritpion($couleur,$prix) {
    echo"<p>Couleur: $couleur, Prix: $prix</p>";
return;
}

function afficher_produit($nom_produit,$couleur,$prix,$disponible){
    if ($disponible==true)
afficher_titre($nom_produit) and afficher_descritpion($couleur, $prix);
else
echo"<p>le produit $nom_produit n'est malhreusement plus disponible</p>";
return;
}
?>
