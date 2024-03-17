<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Espilon</title>
    <meta name="description" content="Epsilon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="epsilon.css">
    <link rel="stylesheet" href="../front/style.css">
    <link rel="stylesheet" href="../front/background.css">
    <script src="https://kit.fontawesome.com/b30f5d3ef8.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <header>
            <nav>
                <ul id="connection">
                    <li id="signup">
                        <a href="userRegistrationForm.php"><i class="fas fa-user-plus"></i> Inscription</a>
                    </li>
                </ul>
            </nav>
            <div class="cleared"></div>

            <h1>Connexion</h1>
        </header>

        <section>
            <form action="userPasswordReset-validation.php" method="post" id="inside">
                <table>
                    <tr>
                        <td class="label">Mail</td>
                        <td><input type="email" name="bca-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br></td>
                    </tr>
                    <tr>
                        <td class="label"></td>
                        <td><input type="submit" name="valid" value="Demander le changement de mon mot de passe"></td>
                    </tr>
                </table>
            </form>
        </section>

        <section>
            <ul id="retour">
                <li id="return">
                    <a href="index.php">Retour</a>
                </li>
            </ul>
        </section>
        <div id="background">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
        </div>
    </div>

</body>

</html>