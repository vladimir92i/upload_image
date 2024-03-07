<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_FILES['file'])) {
    $uploadDir = "./img/";
    $uploadLocation =  $uploadDir . basename($_FILES['file']['name']);
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'pdf'];

    //check extension type
    if (in_array(pathinfo($files, PATHINFO_EXTENSION), $allowed_extensions)) {
        echo "Ce type de fichier n'est pas autorisé";
        echo "<br>";
        echo "Les types de fichiers autorisés sont : jpg, jpeg, png";
        die;
    }

    // Vérifie la taille du fichier
    $maxSize = 5000000; // 5MB
    if ($_FILES['file']['size'] > $maxSize) {
        die("Le fichier est trop grand. La taille maximale autorisée est de 5MB.");
    }

    //check si le fichier existe déja
    if (file_exists($uploadLocation)) {
        echo "Ce fichier existe déjà";
        die;
    }

    // Télécharge le fichier
    try {
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadLocation);
        echo "Le fichier a été téléchargé avec succès";
    } catch (Exception $e) {
        echo "Erreur lors du téléchargement du fichier" . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload files</title>
    <link rel="stylesheet" href="css/form.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include "assets/navbar.php";
    ?>
    <form action="form.php" method="post" enctype="multipart/form-data">
        <label for="file">Choisissez un fichier</label>
        <input type="file" name="file" placeholder="*******.***">
        <input type="submit" value="Envoyez ici !">
    </form>
</body>

</html>