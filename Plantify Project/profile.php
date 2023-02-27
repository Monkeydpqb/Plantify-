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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./Images/favicon_canabis.png" />
    
    <title>profile</title>
</head>
<body class="h-screen overflow-x-hidden flex items-center justify-center" style="background: #d8f3dc;">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="./main.js"></script>

<?php
include("./header.php");
?>

    <div class="h-screen w-full flex flex-col px-3 lg:px-10">

        <div class="w-4/6 mx-auto">
            <form action="./process.php" method="post">
                <!-- DRAG AND DROP -->
                <div class="bg-white w-full h-32 rounded-md shadow-md">
                    <div class="w-full h-16 flex items-center flex justify-between px-5">
                        <img class="rounded-full w-10 h-10 mr-3" src="./Images/favicon_canabis.png" alt="">
                        <input type="text" class="w-full rounded-full h-10 bg-gray-200 px-5" id="postmessage" name="postmessage" placeholder="Write here (minimum 16 characters)" required minlength="16">
                    </div>
                    <div class="w-full h-16 flex justify-between px-3 md:px-10 lg:px-24 xl:px-5">
                        <button type="submit" class="hover:bg-dark-100 text-white font-bold py-2 px-4 rounded">
                            <div class="flex h-full items-center">
                            <svg fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                </path>
                            </svg>
                        </div>
                        </button>
                            
                        
                    </div>
                </div>
            </form>

    <div id="messages"></div>




<?php
require_once('./connect.php');
global $db;
$query = $db->prepare("SELECT * FROM likes WHERE postid = :postid AND userid = :userid");
$query->bindParam(':postid', $postid);
$query->bindParam(':userid', $userid);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result) {
  // L'utilisateur a déjà aimé ce post
  $liked = true;
} else {
  // L'utilisateur n'a pas encore aimé ce post
  $liked = false;
}
?>

    <!-- Navbar -->
    <?php
    include_once('./navbar.php');
    ?>

    <script src="./like2.js"></script>




<!-- Récupération pour le profil (info supplémentaires)
	
	<h2 class=test> Nombre de likes :  </h2>
    <h2 class=test> Nombre de postes : </h2>
    <h2 class=test> Dernière connection : </h2>'
-->
</body>
</html>
	