<?php
session_start();
// Vérification que l'utilisateur est connecté
if (!isset($_SESSION['pseudo'])) {
    header('Location: login.php');
    exit();
}

// Récupération des données du formulaire
$postmessage = $_POST['postmessage'];
$userpseudo = $_SESSION['pseudo'];
$userid = $_SESSION['id'];

// Connexion à la base de données
require_once('./connect.php');

// Requête pour insérer les données dans la table "posts"
$sql = "INSERT INTO posts (postmessage, userpseudo, userid, date) VALUES (:postmessage, :userpseudo, :userid, NOW())";
$stmt = $db->prepare($sql);
$stmt->bindParam(':postmessage', $postmessage);
$stmt->bindParam(':userid', $userid);
$stmt->bindParam(':userpseudo', $userpseudo, PDO::PARAM_STR);
$stmt->execute();

// Redirection vers une page de confirmation
header('Location: ./feed.php');
exit();
?>




