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

</head>

<body>

    <div class="container">
        <header>

            <div id="top">
                <ul id="connection">
                    <li id="signup">
                        <a href="inscription.php"><i class="fas fa-user-plus"></i> Inscription</a>
                    </li>
                </ul>
            </div>

            <div class="cleared"></div>

            <h1>Connexion</h1>
        </header>

        <section>
            <form action="connexion-validation.php" method="post" id="inside">
                <table>
                    <tr>
                        <td class="label">Mail</td>
                        <td><input type="email" name="bca-mail" id="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br></td>
                    </tr>
                    <tr>
                        <td class="label">Mot de passe</td>
                        <td><input type="password" name="bca-pwd" id="" pattern=".{8,}"></td>
                    </tr>
                    <tr>
                        <td class="label">Rester connecté</td>
                        <td><input type="checkbox" name="bca-stayIn" id=""></td>
                    </tr>
                    <tr>
                        <td class="label"></td>
                        <td><input type="submit" name="valid"></td>
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
        <p id="copyright">Copyright 2024 © EPSI Lille</p>
        <div id="background">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
        </div>
    </div>

</body>

</html>