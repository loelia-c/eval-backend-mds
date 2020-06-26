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
        <h1 class="display-4">Formulaire</h1>
        <p class="lead">Veuillez remplir le formulaire ci-dessous</p>
    </div>
</div>
<!-- Déclaration du formulaire, méthode GET, renvoi sur la page affichage.php une fois validé-->
<form action="affichage.php" method="get">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <!-- label et input nom, type texte, obligatoire-->
                    <label for="nom">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" required width="50">
                </div>
                <div class="form-group">
                    <!-- label et input ville, type texte, obligatoire-->
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" required>
                </div>
                <div class="form-group">
                    <!-- label et input téléphone, type nombre, obligatoire-->
                    <label for="phone">Téléphone</label>
                    <input type="number" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <!-- label et input mail, type email, obligatoire-->
                    <label for="mail">Mail</label>
                    <input type="email" class="form-control" id="mail" name="mail" required>
                </div>
                <div class="form-group">
                    <label for="type-projet">Type de projet</label>
                    <!-- label et liste déroulante-->
                    <select class="form-control" name="type-projet" id="type-projet">
                        <option value="">>> Sélectionnez un type de projet <<</option>
                        <option value="Wordpress">Wordpress  |  800€</option>
                        <option value="VueJS">VueJS  |  500€</option>
                    </select>
                </div>
                <div class="form-group">
                    <p>Options du projet</p>
                    <!-- labels et cases à cocher-->
                    <div>
                        <input type="checkbox" name="optionsProjet[]" value="Formulaire de contact avancé">
                        <label>Formulaire de contact avancé  |  150€</label>
                    </div>
                    <div>
                        <input type="checkbox" name="optionsProjet[]" value="Adaptations mobile spécifiques">
                        <label>Adaptations mobile spécifiques  |  225€</label>
                    </div>
                    <div>
                        <input type="checkbox" name="optionsProjet[]" value="Design personnalisé">
                        <label>Design personnalisé  |  310€</label>
                    </div>
                </div>
                <!-- Bouton de validation / envoi du formulaire et redirection vers affichage.php -->
                <button type="submit" class="btn btn-outline-info">Valider</button>
            </div>
        </div>

    </div>

</form>
</body>
</html>