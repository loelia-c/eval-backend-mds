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
<form action="affichage.php" method="get">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" required width="50">
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" required>
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="number" class="form-control" id="phone" name="phone" required minlength="10">
                </div>
                <div class="form-group">
                    <label for="mail">Mail</label>
                    <input type="email" class="form-control" id="mail" name="mail" required>
                </div>
                <div class="form-group">
                    <label for="type-projet">Type de projet</label>
                    <select class="form-control" name="type-projet" id="type-projet">
                        <option value="">>> Sélectionnez un type de projet <<</option>
                        <option value="wordpress">Wordpress</option>
                        <option value="vueJS">VueJS</option>
                    </select>
                </div>
                <div class="form-group">
                    <p>Options du projet</p>
                    <div>
                        <input type="checkbox" id="contact-avance" name="optionsProjet[]" value="Formulaire de contact avancé">
                        <label for="contact-avance">Formulaire de contact avancé</label>
                    </div>
                   <div>
                       <input type="checkbox" id="adapt-mobile" name="optionsProjet[]" value="Adaptations mobile spécifiques">
                       <label for="adapt-mobile">Adaptations mobile spécifiques</label>
                   </div>
                    <div>
                        <input type="checkbox" id="design-perso" name="optionsProjet[]" value="Design personnalisé">
                        <label for="design-perso">Design personnalisé</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-info">Valider</button>
            </div>
        </div>

    </div>

</form>
</body>
</html>