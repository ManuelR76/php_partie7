<?php
if (isset($_FILES['files'])) {
    $name = $_FILES['files']['name'];
    $type = $_FILES['files']['type'];
} else {
    $name = 'Aucun fichier';
    $type = 'Aucun fichier';
}
if (isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['gender'])) {
    if (!is_numeric($_POST['lastName']) || !is_numeric($_POST['firstName']) || !is_numeric($_POST['gender'])) {
        $message = 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['lastName'] . ' ' . $_POST['firstName'] . '.';
    } else {
        $message = 'Vous devez indiquer votre civilité, votre nom et votre prénom dans le formulaire';
    }
} else {
    $message = '';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <h1>Exercice 7</h1>
            <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
        </div>
        <?php
        if (!isset($_POST['lastName']) && !isset($_POST['firstName'])) {
            ?>
            <div>
                <form method = "post" action = "" enctype="multipart/form-data">
                    <p>
                        <label for = "gender">Civilité</label>
                        <select name = "gender" id = "gender">
                            <option value = "Mr">M.</option>
                            <option value = "Mme">Mme</option>
                        </select><br />
                        <label for = "lastName">Votre nom :</label>
                        <input type = "text" name = "lastName" id = "lastName" />
                        <br />
                        <label for = "firstName">Votre prénom :</label>
                        <input type = "text" name = "firstName" id = "firstName" />
                        <br />
                        <label for="files">Votre fichier</label>
                        <input type="file" name="files" id="files"/>
                        <br />
                        <input type = "submit" name = "submit" value = "Envoyer" />
                    </p>
                </form>
            </div>
        <?php } ?>
        <div>
            <p><?= htmlspecialchars($message); ?></p>
            <p>Nom du fichier : <?= $name; ?><br />Type de fichier : <?= $type; ?></p>
        </div>
    </body>
</html>