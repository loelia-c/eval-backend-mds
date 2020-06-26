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
                    <?php
                    /*On récupère le nom et on le retourne*/
                    echo $_GET['nom'];
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    Ville :
                </div>
                <div class="col-lg-10">
                    <?php
                    /*On récupère la ville*/
                     $ville = $_GET['ville'];
                    /*On défini l'agence par défaut à Paris puisqu'il s'agit du cas le plus général*/
                     $agence ='Paris';
                    /*Si la ville du prospect est Nantes, alors l'agence est Nantes*/
                    if($ville == 'Nantes'){
                        $agence = 'Nantes';
                    }
                    /*Sinon, si la ville du prospect est Marseille, alors l'agence est Marseille*/
                    elseif ($ville == 'Marseille'){
                        $agence = 'Marseille';
                    }
                    /*On retourne la ville*/
                    echo $ville;
                    echo '<p>Votre demande sera envoyé à l\'agence de '.$agence.' car vous êtes sur la ville de '.$ville.'.</p>';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    Téléphone :
                </div>
                <div class="col-lg-10">
                    <?php
                    /*On récupère le téléphone et on le retourne*/
                    echo $_GET['phone'];
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    Mail :
                </div>
                <div class="col-lg-10">
                    <?php
                    /*On récupère le mail et on le retourne*/
                    echo $_GET['mail'];
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    Type de projet :
                </div>
                <div class="col-lg-10">

                    <?php
                    /*On récupère le type de projet et on le retourne*/
                    echo $_GET['type-projet'];
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    Options du projet :
                </div>
                <div class="col-lg-10">
                    <ul>
                        <?php
                        /*On récupère les options cochées dans un tableau*/
                        $tab_opt = $_GET['optionsProjet'];
                        /*On parcours ce tableau et on retourne chaque valeur sous forme de liste*/
                        for ($i=0; $i < count($tab_opt); $i++)
                        {
                            echo '<li>'.$tab_opt[$i].'</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
            /*On défini un tableau de type de projet en associant la clé (nom du type de projet) à sa valeur (prix)*/
            $type_proj_price = array(
                'Wordpress' => 800,
                'VueJS' => 500
            );
            /*On défini un tableau d'options de projet en associant la clé (nom de l'option de projet) à sa valeur (prix)*/
            $opt_proj_price = array(
                    'Formulaire de contact avancé' => 150,
                    'Adaptations mobile spécifiques' => 225,
                    'Design personnalisé' => 310
            )
            ?>
            <div class="row">
                <div class="col-lg-2">
                    Prix estimé :
                </div>
                <div class="col-lg-10">
                    <?php
                    /*Initialisation du prix à 0€*/
                    $price = 0;
                    /*On parcours le tableau de type de projet en récupérant la clé et la valeur*/
                    foreach ($type_proj_price as $key => $value)
                    {
                        /*Si la clé correspond au nom du type de projet sélectionné par le prospect, alors on ajoute au prix le prix du type sélectionné*/
                        if($key == $_GET['type-projet'])
                        {
                            $price = $price + $value;
                        }
                    }
                    /*On parcours le tableau des options de projet en récupérant la clé et la valeur*/
                    foreach ($opt_proj_price as $key => $value)
                    {
                        /*On parcours également le tableau des options sélectionnées par le prospect*/
                        foreach ($tab_opt as $option)
                        {
                            /*Pour chaque option, si celle-ci correspond à la clé, alors on ajoute le prix de l'option au prix total*/
                            if($key == $option)
                            {
                                $price = $price + $value;
                            }
                        }

                    }
                    /*Si toutes les options sont cochées, alors on applique au prix total une réduction de 10%*/
                    if (count($tab_opt) == 3){
                        $price = $price*0.9;
                    }
                    /*On affiche le prox en €*/
                    echo $price.'€';

                    ?>
                </div>
            </div>
        </div>
    </body>
</html>