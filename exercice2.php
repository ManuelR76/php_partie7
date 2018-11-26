<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>exercice 2</title>
    </head>
    <body>
        <div>
            <h1>Exercice 2</h1>
            <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
        </div>
        <form method = "post" action = "user.php">
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