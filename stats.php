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

    <title>Statistiques</title>
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

        <h1>Statistiques</h1>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Chemin</th>
                    <th>Nombre de visites</th>
                    <th>Min (ms)</th>
                    <th>Max (ms)</th>
                    <th>Moyenne (ms)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>/collaborateurs/editer</td>
                    <td>500</td>
                    <td>10</td>
                    <td>1000</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>/collaborateurs/lister</td>
                    <td>125</td>
                    <td>5</td>
                    <td>600</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>/collaborateurs/nouveau</td>
                    <td>200</td>
                    <td>2</td>
                    <td>58</td>
                    <td>789</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
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