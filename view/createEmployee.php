<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation d'employee</title>
</head>
<body>
    <form action="/mediasmart/createEmployee" method="POST">

    <label for="name">Nom :</label>
    <input type="text" name="name"><br><br>

    <label for="first_name">Prénom :</label>
    <input type="text" name="first_name"><br><br>

    <label for="password">Password :</label>
    <input type="password" name="password"><br><br>

    <label for="confpassword">Confirmez le password :</label>
    <input type="password" name="confpassword" id="confpassword"><br><br>

    <input type="submit" value="Valider">
    </form>
    <a href="<?php echo $router->generate('dashboard-employee') ?>">retour</a>
</body>
</html>