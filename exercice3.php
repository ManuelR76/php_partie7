<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>exercice 3</title>
    </head>
    <body>
        <div>
            <h1>Exercice 3</h1>
            <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
        </div>
         <form method = "get" action = "user3.php">
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