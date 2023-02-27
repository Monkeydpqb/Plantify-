<?php
session_start();
if ($_SESSION["connecter"] != "yes") {
    header("location:login.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./Images/favicon_canabis.png" />
    <link href="./blogv2.css" rel="stylesheet">
    <title>Blog</title>
</head>

<body class="bg-white dark:bg-gray-900 h-screen flex items-center justify-center" >

    <!-- Navbar -->
    <?php
    include_once('./navbar.php');
    ?>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap" rel="stylesheet">

<div class="container">
	<div class="card">
		<figure class="card__thumb">
			<img src="./Images/blog/coline.jpg" alt="Picture by Kyle Cottrell" class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">Alors l’insomnie c’est quoi ?</h2>
				<p class="card__snippet">L’insomnie se caractérise par une difficulté à s’endormir ou à dormir suffisamment. C’est un manque de sommeil ou encore un sommeil de mauvaise qualité</p>
				<a href="./articles/insommni.php" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>

	<div class="card">
		<figure class="card__thumb">
			<img src="./Images/blog/cannabis.jpg" alt="Picture by Nathan Dumlao" class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">Cannabis” VS “Chanvre</h2>
				<p class="card__snippet"> Tout d'abord, le chanvre et le cannabis appartiennent à la même famille botanique, celle des Cannabaceae. Le mot chanvre est d’ailleurs dérivé du latin cannabis.</p>
				<a href="./articles/cannabis.php" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>

	<div class="card">
		<figure class="card__thumb">
			<img src="./Images/blog/fatigue v2.jpg" alt="Picture by Daniel Lincoln" class="card__image">
			<figcaption class="card__caption">
				<h2 class="card__title">Contre les problèmes d’endormissement</h2>
				<p class="card__snippet">À peine au lit lové sous ta couverture et tu angoisses déjà à l’idée de mettre 2h à t’endormir ? Si le problème reste lié à la phase d’endormissement et que le reste de la nuit se passe bien, l’huile de chanvre est toute indiquée pour t’aider à t'endormir plus sereinement, et donc plus rapidement !</p>
				<a href="./articles/sommeil.php" class="card__button">Read more</a>
			</figcaption>
		</figure>
	</div>
</div>


</body>
</html>