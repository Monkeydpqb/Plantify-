<?php
session_start();
require_once('./connect.php');
if (!isset($_SESSION['id'])) {
  echo json_encode(['error' => 'Vous devez être connecté pour aimer ce message.']);
  exit;
}

if (isset($_POST['postid'])) {
    $postid = $_POST['postid'];
    $userid = $_SESSION['id'];
  
    // Vérifier si l'utilisateur a déjà aimé le post
    $query = $db->prepare("SELECT * FROM likes WHERE postid = :postid AND userid = :userid");
    $query->bindParam(':postid', $postid);
    $query->bindParam(':userid', $userid);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $alreadyLiked = ($result !== false);
  
    // Enregistrer le like dans la base de données
    if (!$alreadyLiked) {
      $query = $db->prepare("INSERT INTO likes (postid, userid) VALUES (:postid, :userid)");
      $query->bindParam(':postid', $postid);
      $query->bindParam(':userid', $userid);
      $query->execute();
    }
  
    // Récupérer le nombre total de likes pour le post
    $query = $db->prepare("SELECT COUNT(*) as likes FROM likes WHERE postid = :postid");
    $query->bindParam(':postid', $postid);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $likes = $result['likes'];
  
    // Envoyer une réponse JSON
    header('Content-Type: application/json');
    echo json_encode(['likes' => $likes, 'alreadyLiked' => $alreadyLiked]);
  
    // Mettre à jour le compteur de likes pour le post
    $query = $db->prepare("UPDATE posts SET likecounter = :likes WHERE postid = :postid");
    $query->bindParam(':likes', $likes);
    $query->bindParam(':postid', $postid);
    $query->execute();
    exit;
  }


