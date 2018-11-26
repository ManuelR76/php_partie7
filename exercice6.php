<?php
$show = true;
if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender'])) {
    echo ('Bonjour ' . htmlspecialchars($_POST['gender']) . ' ' . htmlspecialchars($_POST['firstname']) . ' ' . htmlspecialchars($_POST['lastname']));
    $show = false;
} else {
    echo ('Vous devez remplir les champs');
    $show = true;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>exercice 6</title>
    </head>
    <body>
        <div>
            <h1>Exercice 6</h1>
            <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
                Utiliser qu'une seule page.</p>
        </div>
        <?php if ($show) : ?>  
            <form action = "exercice6.php" method = "post">
                <p>
                    <select name="gender">
                        <option disabled selected> </option>
                        <option name="sir">M.</option>
                        <option name="madame">Mme</option>
                    </select><br>
                    <label id="firstName" for="firstname">Nom : </label>
                    <input type = "text" name = "firstname"><br>
                    <label id="lastName" for="lastname">Prénom : </label>
                    <input type = "text" name = "lastname"><br>
                    <input type = "submit" value="envoyer">
                </p>
            </form>
        <?php endif; ?>
    </body>
</html>