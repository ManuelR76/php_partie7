<?php
$gender = filter_input(INPUT_POST, 'gender');
$lastname = filter_input(INPUT_POST, 'lastname');
$firstname = filter_input(INPUT_POST, 'firstname');
$file = filter_input(INPUT_POST, 'file');
$extension = pathinfo($file) ['extension'];

if (isset($_FILES['files'])) {
    $name = $_FILES['files']['name'];
    $type = $_FILES['files']['type'];
} else {
    $name = 'Aucun fichier';
    $type = 'Aucun fichier';
}
if (isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['gender'])) {
    if (!is_numeric($_POST['lastName']) || !is_numeric($_POST['firstName']) || !is_numeric($_POST['gender'])) {
        if($type !== 'application/pdf') {
            $message = 'Le fichier doit être au format PDF';
        } else {
            $message = 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['lastName'] . ' ' . $_POST['firstName'] . '.'; 
        }
    } else {
        $message = 'Vous devez indiquer votre civilité, votre nom et votre prénom dans le formulaire.';
    }
} else {
    $message = '';
}

if (isset($extension)) {
    $extension = false;
} else {
    echo 'Seuls les fichiers PDF sont acceptés';
};

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 8</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div>
            <h1>Exercice 8</h1>
            <p>Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</p>
        </div>
        <?php
        if (!isset($_POST['lastName']) && !isset($_POST['firstName'])) {
        ?>
        <div>
            <form method = "post" action = "" enctype="multipart/form-data">
                <p>
                    <label for = "gender">Civilité</label>
                    <select name = "gender" id = "gender">
                        <option value = "Mr">Monsieur</option>
                        <option value = "Mme">Madame</option>
                    </select><br />
                    <label for = "lastName">Votre nom :</label>
                    <input type = "text" name = "lastName" id = "lastName" />
                    <br />
                    <label for = "firstName">Votre prénom :</label>
                    <input type = "text" name = "firstName" id = "firstName" />
                    <br />
                    <label for="files">Votre fichier</label>
                    <input type="file" name="files" id="files" />
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