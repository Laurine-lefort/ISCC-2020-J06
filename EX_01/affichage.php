<?php
function affichertitre($nomproduit) {
    echo"<h1>Fiche produit: $nomproduit </h1>";
} affichertitre('T-shirt femme');

function afficherdescritpion($couleur,$prix) {
    echo"<p>Couleur: $couleur, Prix: $prix</p>";
} afficherdescritpion('Rouge','15.50');

function afficherproduit($nomproduit,$couleur,$prix,$disponible){
    if ($disponible==true)
affichertitre() and afficherdescritpion();
else
echo"<p>le produit $nomproduit n'est malhreusement plus disponible</p>";
} afficherproduit('T-shirt femme', 'Rouge' , '15.50' , 'true')
?>
