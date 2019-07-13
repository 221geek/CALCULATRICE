<?php

    $resultat = "Le resultat s'affiche ici";

    if (isset($_POST['validation'])) {
        if (!empty($_POST['nbre1']) AND !empty($_POST['nbre2']) AND !empty($_POST['operateur'])) {
            $nombre1 = $_POST['nbre1'];
            $nombre2 = $_POST['nbre2'];
            $operateur = $_POST['operateur'];
            if(ctype_digit($nombre1) && ctype_digit($nombre2)){

                switch($operateur){
                    case "add":
                        $resultat = $nombre1 + $nombre2;
                        break;
                    case 'sous':
                        $resultat = $nombre1 - $nombre2;
                        break;
                    case 'div':
                            $resultat = $nombre1/$nombre2;
                        break;
                    case 'mult':
                        $resultat=$nombre2*$nombre2;
                        break;
                    case 'mod':
                        $resultat = $nombre1 % $nombre2;
                        break;
                }

            }
            else{
                $erreur = "Veillez saisir des entiers";
            }
        } else {
            $erreur = "Veillez remplir tous les champs";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="main.css" class="rel">
</head>
<body>
    <div class="formulaire">
            <div class="erreur">
                <?php
                    if(isset($erreur)){
                        echo $erreur;
                    }
                ?>
            </div>
            
            <form method="POST">
                <h1>Calculatrice</h1>
                <table>
                    <tr>
                        <td><label for="nombre1">Nombre 1</label></td>
                        <td><input type="text" name="nbre1"></td>
                    </tr>
                    <tr>
                        <td><label for="nombre2">Nombre 2</label></td>
                        <td><input type="text" name="nbre2"></td>
                    </tr>   
                    <tr>
                        <td><label>Operateur</label></td>
                        <td><select name="operateur" value="choisir l'operateur">
                                <option value="add">+</option>
                                <option value="sous">-</option>
                                <option value="mult">*</option>
                                <option value="div">/</option>
                                <option value="mod">%</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="calculer" name="validation"></td>
                    </tr>  
                </table>
            </form>
            <div class="resultat">
                <?php
                    if(isset($resultat)){
                        echo $resultat;
                    }
                ?>
            </div>
    </div>

</body>
</html>