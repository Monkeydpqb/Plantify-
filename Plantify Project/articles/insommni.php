<?php
session_start();
if ($_SESSION["connecter"] != "yes") {
  header("location:login.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="./css/favicon_canabis.png" />
  <link href="./css/articles.css" rel="stylesheet" />
  <title>Document</title>
</head>

<body>

  <div class="wrapper">
    <div class="scroll-indicator"></div>
    <div class="content-wrapper">
      <div class="content">
        <div class="poster" style="background-image:url(./image/arbre\ dodo.jpg);">
          <div class="poster-title">
            <h1>Alors l’insomnie c’est quoi ? </h1>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptate, laboriosam sunt eveniet eius iure, sapiente in maiores quasi saepe quas quisquam obcaecati odio </p>
          </div>
        </div>
        <div class="info">
        </div>
        <div class="words">
          <p>
            <font class="letter">G</font>
            L’insomnie se caractérise par une difficulté à s’endormir ou à dormir suffisamment. C’est un manque de sommeil ou encore un sommeil de mauvaise qualité (avec de longues périodes de réveil, des réveils fréquents, un sommeil trop léger, …). Plusieurs signes permettent de l’identifier:
          </p>
          <ul>
            <li>
              Difficultés d’endormissement
            </li>
            <li>
              Manque de sommeil qui se répercute sur la journée
            </li>
            <li>
              Difficultés de concentration et de mémorisation
            </li>
            <li>
              Maux de tête fréquents voir quotidiens
            </li>!
          </ul>

          <p>
            <font class="letter">M</font>
            Il arrive évidemment à tout le monde de passer une mauvaise nuit occasionnellement ou pendant une période de vie stressante. Mais lorsque le problème devient récurrent voir chronique, il s’agit alors d’un problème d’insomnie qui s’installe et vient impacter la vie personnelle et professionnelle. Les douleurs physiques s’en trouvent décuplées, un état d’épuisement s’installe et pour finir affronter une journée devient un véritable périple. C’est pourquoi il est important de vite réagir avant d’en subir des conséquences sur la santé.
          </p>

          Pour cela, il y a des solutions naturelles comme <strong>le cannabis </strong> !
          <p>

            <font class="letter">A</font>
            L'idée majeure est de réguler le sommeil afin qu’il soit récupérateur et de qualité. Tu as déjà essayé le CBD aux dosages adéquats mais ça n’a pas été efficace ? Alors il faut aller plus loin et essayer autre chose.
            <br>
            Le cannabis permet un endormissement plus rapide, mais aussi une réduction de la phase de sommeil paradoxal (la phase de rêve) en allongeant la phase de sommeil profond, ce qui donne des nuits réparatrices !
            <br>
            Moins (voir plus) de réveils nocturnes ou précoces, un sommeil régulé et donc de meilleure qualité, une vie quotidienne facilitée. Bien sûr, les effets recherchés sont de types thérapeutiques pour un problème bien ciblé se déroulant la nuit, il serait donc contre productif d’avoir une consommation diurne car tu serais alors endormi, assoupi, et peu concentré le jour et tu perdrais aussi en efficacité sur ton utilisation nocturne. Je t’invite donc fortement à te contenter d’un usage au moment du coucher.
          </p>
          <p>

            <font class="letter">L</font>
            Passons maintenant au gros du sujet ! Plusieurs options sont possibles selon tes besoins et ton mode de vie :
          </p>

          <h3>Fumer de la weed</h3>
          <ul>
            <li>
              Simple et rapide
            </li>
            <li>
              Apparition des effets dès les premières secondes avec effet maximum sous 30 minutes, à utiliser juste avant de dormir
            </li>
            <li>
              Durée des effets de 1 à 3h
            </li>
            <li>
              Effets et durées variables selon la production et la qualité des fleurs
            </li>
          </ul>

        </div>
        <div class="quote">
          <p>
            <font class="letter">“</font>
            L’herbe est la guérison de la nation, l’alcool, la destruction. <br> Fumer de l’herbe te révèle à toi-même.
          </p>
          <p class="author">Bob Marley</p>
        </div>
        <div class="words">
          <p>
            <font class="letter">F</font>
            Pour finir, il ne faut pas oublier qu’il s’agit d’un véritable problème de santé et que ça ne reste pas une solution miracle. Tu seras soulagé de tes problèmes de sommeil pour une durée plus ou moins importante, mais comme toujours, le corps s’habitue aux effets qui finissent par s’estomper au long court. Pire, si ton corps s’y est accoutumé, il aura du mal à s’en séparer si l’arrêt est trop brutal. Donc si tes nuits sont de vrais cauchemars, n’hésites pas à consulter un professionnel en la matière pour t’accompagner.
          </p>
        </div>
        <div class="author">
          <div class="image"></div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="content">
        <div>
          https://www.cbd.fr/blog/huile-cbd-pour-le-sommeil-avis-et-conseils/
          https://www.cannavapos.fr/comment-consommer-cannabis/
          https://www.mydodow.com/blog/fr/article/cannabis-sommeil
          https://www.la-clinique-e-sante.com/blog/fatigue/signes-insomnie
          https://www.santeaddictions.fr/je-m-informe/herbe-beuh-shit-quelles-differences
        </div>
        <div class="mt-2 flex items-center justify-between">
          <span class="border-b w-1/5 md:w-1/4"></span>
          <a href="http://localhost/Plantify%20Project/blogv2.php" class="text-xs text-gray-500 uppercase">Retour</a>
          <span class="border-b w-1/5 md:w-1/4"></span>
        </div>
      </div>
    </div>
  </div>



  <script src="./css/articles.js"></script>
</body>

</html>