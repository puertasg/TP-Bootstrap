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
    <script src="./js/validation.js"></script>
    <title>Ajouter un collaborateur</title>
</head>

<body>
    <?php include "elements/navbar.html"; ?>

    <div class="container-fluid">
        <h4>Nouveau Collaborateur</h4>
    </div>

    <div class="container">
        <form class="needs-validation" novalidate>
            <div class="form-group row">
                <label for="inputNom" class="col-form-label col-4">Nom</label>
                <div class="col-8 pr-0">
                    <input type="text" id="inputNom" class="form-control" required>
                    <div class="invalid-feedback">
                        Le nom est obligatoire
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPrenom" class="col-form-label col-4">Prénom</label>
                <div class="col-8 pr-0">
                    <input type="text" id="inputPrenom" class="form-control" required>
                    <div class="invalid-feedback">
                        Le prénom est obligatoire.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputDate" class="col-form-label col-4">Date de naissance</label>
                <div class="col-8 pr-0">
                    <input type="text" id="inputDate" class="form-control" required>
                    <div class="invalid-feedback">
                        La date de naissance est obligatoire.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="textAdresse" class="col-form-label col-4">Adresse</label>
                <div class="col-8 pr-0">
                    <textarea type="text" id="textAdresse" class="form-control" required></textarea>
                    <div class="invalid-feedback">
                        L'adresse est obligatoire.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputNoSecu" class="col-form-label col-4">Numéro de sécurité sociale</label>
                <div class="col-8 pr-0">
                    <input type="text" id="inputNoSecu" class="form-control" required>
                    <div class="invalid-feedback">
                        Le numéro de sécurité sociale est obligatoire.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="ml-auto">
                    <input type="submit" class="btn btn-sm btn-success" value="Créer">
                </div>
            </div>
        </form>
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