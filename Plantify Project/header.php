<?php
session_start();
?>

<?php
$userid = $_GET['userid'];
require('connect.php');

// Requête SQL pour récupérer les informations de l'utilisateur
$sql = "SELECT nom, prenom, email, pseudo FROM users WHERE id = (SELECT MAX(userid) FROM posts WHERE id = :postid)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':postid', $userid, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch();

// Affichage des informations de l'utilisateur
?>

<header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./header.css" rel="stylesheet">

    <title>profile</title>
</head>
<body>
    

<?php
	echo "
	<header>
	<div class='container'>
			<div class='profile'>
	
				<div class='profile-image'>
	
					<img src='./Images/LogoPlantify.png' alt=''>
				</div>
	
				<div class='profile-user-settings'>
					<h1 class='profile-user-name'>". $user['pseudo'] ."</h1>
	
					<button class='btn profile-edit-btn'>Edit Profile</button>
	
					<button class='btn profile-settings-btn' aria-label='profile settings'><i class='fas fa-cog' aria-hidden='true'></i></button>
				</div>
	
				<div class='profile-bio'>
	
				<p><span class='profile-real-name'>" . $user['Nom'] . " " . $user['prenom'] . "</span> " . $user['bio'] . "</p>
				</div>
	
			</div>
			<!-- End of profile section -->
		</div>
		<!-- End of container -->
	</header>";

	echo "email : " . $user['email'] . "<br>";
	?>

</body>
</html>
	