<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Loélia COUTEAU - Evaluation PHP</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Informations fournies</h1>
        <p class="lead">Veuillez trouver ci-dessous les informations que vous nous avez fournies</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-2">
            Nom :
        </div>
        <div class="col-lg-10">
            <?php echo $_GET['nom']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Ville :
        </div>
        <div class="col-lg-10">
            <?php echo $_GET['ville']; ?>
        </div>    </div>
    <div class="row">
        <div class="col-lg-2">
            Téléphone :
        </div>
        <div class="col-lg-10">
            <?php echo $_GET['phone']; ?>
        </div>    </div>
    <div class="row">
        <div class="col-lg-2">
            Mail :
        </div>
        <div class="col-lg-10">
            <?php echo $_GET['mail']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Type de projet :
        </div>
        <div class="col-lg-10">
            <?php echo $_GET['type-projet']; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            Options du projet :
        </div>
        <div class="col-lg-10">
            <ul>
                <?php
                $tab_opt = $_GET['optionsProjet'];
                for ($i=0; $i < count($tab_opt); $i++)
                {
                    echo '<li>'.$tab_opt[$i].'</li>';
                }
                ?>
            </ul>

        </div>
    </div>
</div>
</body>
</html>