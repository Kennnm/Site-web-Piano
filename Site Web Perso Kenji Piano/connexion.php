<?php
    $user = 'root';
    $pw = '';
    try{
        $conn = new PDO("mysql:host=localhost;dbname=kenjipiano", $user, $pw);
    } catch (PDOException $e) {
        echo "Erreur lors de la connexion à la Base de Données : " . $e->getMessage();
    }

    $req = $conn->query("SELECT * FROM videos ORDER BY date_creation DESC LIMIT 2");
    $videos = $req->fetchAll(PDO::FETCH_ASSOC);
?>

