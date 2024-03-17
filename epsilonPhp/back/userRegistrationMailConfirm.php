<?php

require_once('env.php');
$mail = $_GET["mail"];
// verif si mail existe pas déjà
$selectall = $db->query('SELECT * FROM user WHERE mail="' . $mail . '"');
$result = $selectall->fetch();
$counttable = count((is_countable($result) ? $result : []));
// sinon, insertion en base
if ($counttable == 0) {
    $res = $db->prepare('INSERT INTO user (mail,password) VALUES(:mail,:password)');
    $pwd = $_GET["token"];
    $res->execute(array('mail' => $mail, 'password' => $pwd));
    $return = "Inscription validée, vous pouvez maintenant vous connecter !";
} else {
    $return = '<span style="color:red">Mail déjà inscrit</span>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Espilon</title>
    <meta name="description" content="Epsilon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../front/style.css">
    <link rel="stylesheet" href="../front/background.css">
    <link rel="stylesheet" href="epsilon.css">
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
                    <a href="userConnectionForm.php"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                </ul>
            </nav>
            <div class="cleared"></div>

            <h1><?php echo $return ?></h1>
        </header>

        <section>
            <ul id="retour">
                <li id="return">
                    <a href="index.php">Retour</a>
                </li>
            </ul>
        </section>

    </div>

</body>

</html>