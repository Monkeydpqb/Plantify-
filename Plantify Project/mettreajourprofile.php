<?php
include_once('./connect.php');
session_start();
$userid = $_SESSION['id'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $password = $_POST["password"];
    $pass_crypt = md5($password);
   

  
    // Vérifiez si un fichier a été téléchargé avant de l'ajouter à la requête SQL
    if (isset($_FILES['profilepicture']) && $_FILES['profilepicture']['error'] == UPLOAD_ERR_OK) {
      $profilepicture = file_get_contents($_FILES['profilepicture']['tmp_name']);
      $stmt = $db->prepare("UPDATE users SET pseudo=:pseudo, email=:email, nom=:nom, prenom=:prenom,password=:password,  profilepicture=:profilepicture WHERE id=:id");
      $stmt->bindParam(':profilepicture', $profilepicture, PDO::PARAM_LOB);
    } else {
      $stmt = $db->prepare("UPDATE users SET pseudo=:pseudo, email=:email, nom=:nom, prenom=:prenom,password=:password,  WHERE id=:id");
    }
  
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':password', $pass_crypt );
    $stmt->bindParam(':id', $userid);
    $stmt->execute();
  
    if ($stmt->rowCount() > 0) {
      echo "Les informations de profil ont été mises à jour avec succès.";
    } else {
      echo "Une erreur s'est produite lors de la mise à jour des informations de profil.";
    }
  }

header('location: feed.php');
  ?>