<!DOCTYPE html>
<html lang="en">

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
            <h1>Connexion</h1>
        </header>
        <?php
        session_start();
        require_once 'env.php';
        $email = $_SESSION['mail'];
        $req = $db->prepare('SELECT id FROM user WHERE mail = :mail');
        $req->execute(array('mail' => $email));
        $req = $req->fetch();
        $id = $req['id'];
        $dir = $id . '/0 2';
        $files = scandir($dir);
        $files = array_diff($files, array('.', '..'));
        foreach ($files as $file) {
            echo '<img src="' . $dir . '/' . $file . '">' . $file . '</img><br>';
        }


        ?>

        <p id="copyright">Copyright 2024 © EPSI Lille</p>
        <div id="background">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
        </div>

</body>

</html>