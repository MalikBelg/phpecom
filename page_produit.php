<?php

    require_once "tableau_produit.php";

    $produit = $tab[1]; // J'appelle l'indice 1 de mon tableau

    // var_dump($tab[1]);

?>

<h1>Riz</h1>

    <article>
        
            <img src="img/<?=$produit["image"]?>" alt="">
            <h3><?=$produit["titre"]?></h3>
            <p><?=$produit["Prix"]?></p>
            <p>Quantité en stock : <?=$produit["Quantité"]?></p>
            <p><?=$produit["Description"]?></p>
        
    </article> 