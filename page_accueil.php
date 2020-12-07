<?php 

    require_once "tableau_produit.php"; // j'appelle mon tableau

    // var_dump($tab); 

?>



<h1>Ma boutique</h1>



<?php foreach($tab as $indice => $produit) : ?> <!-- Ma condition pour chaque produit du tableau --> 

    <article>
        <div>
            <a href="index.php?page=pageproduit&art=<?=$indice?>"><img src="img/<?=$produit["image"]?>" alt=""></a>
            <h3><?=$produit["titre"]?></h3>
            <p><?=$produit["Prix"]?></p>
            <p>Quantité en stock : <?=$produit["Quantité"]?></p>
            <p><?=$produit["Description"]?></p>
            <button>Ajouter au panier</button>
        </div>
    </article>  


<?php endforeach ?>
