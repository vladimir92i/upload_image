<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Espilon</title>
    <meta name="description" content="Epsilon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="epsilon.css">
    <link rel="stylesheet" href="../front/background.css">
    <link rel="stylesheet" href="../front/style.css">
    <style type="text/css">
        #retour {
            float: left;
        }

        #return>a {
            color: rgb(70, 114, 70);
            text-decoration: none;
        }

        table {
            margin: auto;
        }

        td {
            float: left;
        }

        .label {
            min-width: 8em;
            text-align: left
        }
    </style>
</head>

<body>

    <div class="container">
        <header>
            <nav>
                <ul id="connection">
                    <li id="signin">
                        <a href="userConnectionForm.php"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                    </li>
                </ul>
            </nav>
            <div class="cleared"></div>

            <h1>Inscription</h1>
        </header>

        <section>
            <form action="userRegistrationForm-validation.php" method="post" id="inside">
                <table>
                    <tr>
                        <td class=" label">Mail</td>
                        <td><input type="email" name="bca-mail" id="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br></td>
                    </tr>
                    <tr>
                        <td class="label">Mot de passe</td>
                        <td><input type="password" name="bca-pwd" id="" pattern=".{8,}"></td>
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

    </div>
    <div id="background">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </div>
</body>

</html>