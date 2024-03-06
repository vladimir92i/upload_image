<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$uploadDir = "./img/";
$uploadImg =  $uploadDir . basename($_FILES['file']['name']);

function get_extension_files($files)
{
    return pathinfo($files, PATHINFO_EXTENSION);
}
function check_allowed_extension($extension)
{
    $allowed_extensions = ['jpg', 'jpeg', 'png'];
    return in_array($extension, $allowed_extensions);
}

if (isset($_FILES)) {
    if (!check_allowed_extension(get_extension_files($_FILES['file']['name']))) {
        echo "Ce type de fichier n'est pas autorisé";
        echo "<br>";
        echo "Les types de fichiers autorisés sont : jpg, jpeg, png";
        die;
    }

    move_uploaded_file($_FILES['file']['tmp_name'], $uploadImg);
    echo "Le fichier a bien été uploadé";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload files</title>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <h1>Upload your file</h1>
    <form action="form.php" method="post" enctype="multipart/form-data">
        <label for="file">Choisissez un fichier</label>
        <input type="file" name="file" placeholder="*******.***">
        <input type="submit" value="envoie">
    </form>
</body>

</html>