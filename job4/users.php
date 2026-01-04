<?php
// Je définis le header pour indiquer que c'est du JSON
header('Content-Type: application/json');

try {
    // Je me connecte à la base de données "utilisateurs"
    $pdo = new PDO("mysql:host=localhost;dbname=utilisateur;charset=utf8", "root", "");
    // Je récupère l'ensemble des utilisateurs
    $stmt = $pdo->query("SELECT * FROM utilisateurs");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // J'affiche les utilisateurs au format JSON
    echo json_encode($users);
} catch(PDOException $e) {
    // En cas d'erreur, j'affiche un message d'erreur en JSON
    echo json_encode(["error" => "Erreur : " . $e->getMessage()]);
}
?>

