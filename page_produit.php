<?php

    require_once "tableau_produit.php";

    $indice = (isset($_GET["art"]))? $_GET["art"] : 0;
    
    $produit = $tab[$indice]; 

    // var_dump($tab[1]);

?>


    <article>
        <div>
            <img src="img/<?=$produit["image"]?>" alt="">
            <h3><?=$produit["titre"]?></h3>
            <p><?=$produit["Prix"]?></p>
            <p>Quantité en stock : <?=$produit["Quantité"]?></p>
            <p><?=$produit["Description"]?></p>
        </div>
    </article> 