<?php 

    require_once "tableau_produit.php"; // j'appelle mon tableau

    // var_dump($tab); 

?>



<h1>Ma boutique</h1>



<?php foreach($tab as $produit) : ?> <!-- Ma condition pour chaque produit du tableau --> 

    <article>
        <div>
            <img src="img/<?=$produit["image"]?>" alt="">
            <h3><?=$produit["titre"]?></h3>
            <p><?=$produit["Prix"]?></p>
            <p>Quantité en stock : <?=$produit["Quantité"]?></p>
            <p><?=$produit["Description"]?></p>
        </div>
    </article>  


<?php endforeach ?>
