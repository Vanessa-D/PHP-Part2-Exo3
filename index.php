<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 3</title>
</head>
<body>
    <p>
        Créer une variable initialisée à 1.</br>
        Tant que cette variable n'a pas atteint 15, afficher 'On y est presque' : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
            for($i = 1; $i < 15; $i++){
                echo $i. ' : t\'y est presque !<br>';
            }
            echo 'C\'est fini !';
        ?>
    </div>

</body>
</html>