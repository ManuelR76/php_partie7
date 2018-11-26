<?php
if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender']))
    echo ('Bonjour ' . htmlspecialchars($_POST['gender']) . ' ' . htmlspecialchars($_POST['firstname']) . ' ' . htmlspecialchars($_POST['lastname']));
else {
    echo ('Vous devez remplir les champs');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>exercice 5</title>
    </head>
    <body>
        <div>
            <h1>Exercice 5</h1>
            <p>Créer un formulaire sur la page index.php avec :

                Une liste déroulante pour la civilité (Mr ou Mme)
                Un champ texte pour le nom
                Un champ texte pour le prénom

                Ce formulaire doit rediriger vers la page index.php.
                Vous avez le choix de la méthode.</p>
        </div>
        <form action = "exercice5.php" method = "post">
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
    </body>
</html>
