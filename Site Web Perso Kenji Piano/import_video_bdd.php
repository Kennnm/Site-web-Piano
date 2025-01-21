<?php
    if(isset($_POST["valider"])){
        include'connexion.php';
        $newreq = $conn -> prepare("insert into videos(filename,bin) values (?,?)");
        $newreq -> execute(array($_FILES["video"]["name"], file_get_contents($_FILES["video"]["tmp_name"])));
    }

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="fo" method="post" action="" enctype="multipart/form-data">
        <input type="file" name="video" maxlength="100000000"><br>
        <input type="submit" name="valider" value="Charger">
    </form>
</body>
</html>