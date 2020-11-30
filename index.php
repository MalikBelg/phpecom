<?php

    if (isset($_GET["page"])) {    // Ma condtion qui me permet d'afficher le contenu des autres pages

        switch($_GET["page"]){

            case "pageaccueil" : $pageAInclure = "page_accueil.php";
            break;
            case "pageproduit" : $pageAInclure = "page_produit.php";
            break;
            default : $pageAInclure = "page_accueil.php"; // Par défault la page accueil s'ouvrira

        } 

    } else {
        $pageAInclure = "page_accueil.php"; // Contenu afficher dès l'ouverture de la page
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <ul>
        <li><a href="index.php?page=pageaccueil">Accueil</a></li>
        <li><a href="index.php?page=pageproduit">Produit</a></li>
    </ul>


     <?php require $pageAInclure ?> <!-- Je fais appelle à ma variable qui se trouve dans la conditon -->


</body>
</html>