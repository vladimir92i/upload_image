<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Epsilon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b30f5d3ef8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../front/background.css">
    <link rel="stylesheet" href="../front/style.css">
</head>

<body>

    <div class="container">

        <header>

            <?php

            session_start();

            if (isset($_COOKIE['mail']) || isset($_SESSION['mail'])) {
                $id = isset($_COOKIE['mail']) ? $_COOKIE['mail'] : $_SESSION['mail'];
                echo '
            <nav>
                <ul id="connection">
                    <li id="signup">
                        <i class="fas fa-user"></i> ' . $id . '
                    </li>
                    <li>
                        <i class="fas fa-lock"></i> <a href="userPasswordReset.php">Change password</a>
                    </li>
                    <li id="signout">
                        <a href="userDisconnection.php"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </nav>
            ';
            } else {
                echo '
            <nav>
                <ul id="connection">
                    <li id="signup">
                        <a href="userRegistrationForm.php"><i class="fas fa-user-plus"></i> Inscription</a>
                    </li>
                    <li id="signin">
                        <a href="userConnectionForm.php"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                    </li>
                </ul>
            </nav> 
            ';
            }
            ?>

            <div class="cleared"></div>
            <h1>Espilon</h1>
            <p>Plateforme d'apprentissage de <em>l'EPSI</em></p>

        </header>