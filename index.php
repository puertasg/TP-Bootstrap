<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Accueil</title>
</head>

<body>
    <?php include "elements/navbar.html"; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="ml-auto p-1">
                <a href="./creer_collab.php" class="btn btn-primary">Ajouter un collaborateur</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h1>Les collaborateurs</h1>
        </div>
        <div class="row">
            <p class="my-auto">Rechercher un nom ou un prénom qui commence par:</p>
            <input type="text" class="my-auto m-1">
            <button type="button" class="my-auto btn btn-primary btn-sm">Rechercher</button>
            <input type="checkbox" class="my-auto m-1" id="checkboxCollabDisabled">
            <label for="checkboxCollabDisabled" class="my-auto">Voir les collaborateurs désactivés</label>
        </div>
        <div class="row">
            <p class="my-auto">Filtrer par département: </p>
            <select class="m-1">
                <option value="all">Tous</option>
                <option value="compta">Comptabilité</option>
                <option value="rh">Ressources humaines</option>
                <option value="info">Informatique</option>
            </select>
        </div>
        <div class="row">
            <?php 
                include "./elements/collab_card.html";
                include "./elements/collab_card.html";
                include "./elements/collab_card.html"; 
            ?>
        </div>
        <div class="row">
            <?php 
                include "./elements/collab_card.html";
                include "./elements/collab_card.html";
                include "./elements/collab_card.html"; 
            ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>

</html>