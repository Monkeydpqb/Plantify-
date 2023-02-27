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

  <title>la SBEU c BIEN</title>
</head>

<body>

  <div class="wrapper">
    <div class="scroll-indicator"></div>
    <div class="content-wrapper">
      <div class="content">
        <div class="poster" style="background-image:url(./image/Chanvre.jpg);">
          <div class="poster-title">
            <h1> Cannabis VS Chanvre</h1>
            <div class="line"></div>
            <p>Tout d'abord, le chanvre et le cannabis appartiennent à la même famille botanique, celle des Cannabaceae. Le mot chanvre est d’ailleurs dérivé du latin cannabis. </p>
          </div>
        </div>
        <div class="info">
        </div>
        <div class="words">
          <p>
            <font class="letter">W</font>
          <h3>Le cannabis: une solution efficace contre l’insomnie</h3>

          Herbe, shit, weed, … autant de mots qui nous évoquent instantanément le cannabis. Et pourtant, ça n’est pas tout à fait la même chose. Tu souhaites mieux dormir et tu ne sais pas comment t’y retrouver ? Hé bien tu es au bon endroit !
          <br>
          <br>
          Lorsque les troubles du sommeil sont un combat de chaque nuit, que faut-il faire… Pour cela, il est nécessaire de comprendre ce qu’est l’insomnie et comment le cannabis peut être une option efficace.
          </p>

          <p>
            <font class="letter">E</font>
            Tout d'abord, le chanvre et le cannabis appartiennent à la même famille botanique, celle des Cannabaceae. Le mot chanvre est d’ailleurs dérivé du latin cannabis. <br>
            <br>
            Nombreuses sont les sous-espèces de cannabis mais la différence majeure entre le chanvre et le cannabis est principalement l’usage qui en est fait d’après la teneur en THC (tétrahydrocannabinol), cette fameuse substance psychoactive contenue dans le cannabis. Pour faire simple, une teneur en THC de moins de 0,2 % sur extrait sec correspond à du chanvre, et une teneur de plus 0,2 % de THC correspond à l’appellation cannabis. Le cannabis plébiscité pour ses effets psychoactifs a généralement une teneur de THC entre 5 et 20 % (donc en comparaison, le chanvre ne vous fera pas “planer”).

          </p>
          <p>
            <font class="letter">D</font>
          <h3> Le cannabis est utilisée sous toutes formes </h3>
          <ul>
            <li>
              les sommités florales et les feuilles séchées (herbe, beuh, weed)
            </li>
            <li>
              la résine de cannabis (haschisch, hasch, shit) qui est un solide compressé réalisé avec les parties résineuses de la plante
            </li>
            <li>
              l’huile (CBD, CBN) qui est une essence d’extrait de cannabidiol (aussi appelé cannabinoïde) tiré principalement de la fleur de chanvre
            </li>
          </ul>
          </p>

          <p>

        </div>
        <div class="quote">
          <p>
            <font class="letter">“</font>
            Ca me laisse vraiment perplexe de voir la marijuana assimilée à un narcotique… à une drogue et toute ces merdes.
            <br>
            C’est des milliers de fois meilleur que le whisky, c’est un assistant, un ami.
          </p>
          <p class="author">Louis Armstrong</p>
        </div>
        <div class="words">

          <div class="buttons">
            <div><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
              </svg></div>
            <div><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
              </svg></div>
          </div>
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