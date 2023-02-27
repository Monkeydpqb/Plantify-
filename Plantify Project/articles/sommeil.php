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
        <div class="poster" style="background-image:url(./image/dodo.jpg);">
          <div class="poster-title">
            <h1> Contre les problèmes d’endormissement </h1>
            <div class="line"></div>
            <p>À peine au lit lové sous ta couverture et tu angoisses déjà à l’idée de mettre 2h à t’endormir ? </p>
          </div>

        </div>
        <div class="info">
        </div>
        <div class="words">
          <p>
            <font class="letter">D</font>
            À peine au lit lové sous ta couverture et tu angoisses déjà à l’idée de mettre 2h à t’endormir ? Si le problème reste lié à la phase d’endormissement et que le reste de la nuit se passe bien, l’huile de chanvre est toute indiquée pour t’aider à t'endormir plus sereinement, et donc plus rapidement ! Grâce à ses effets relaxants et anxiolytiques, le CBD est particulièrement efficace pour lutter contre le stress et l’anxiété de l’endormissement.
            <br>
            <br>
            Mais alors quel CBD choisir pour que ton sommeil ne tarde plus à venir ? Il est important de savoir que toutes les huiles de CBD ne sont pas indiquées pour procurer le sommeil. Il est donc important d’utiliser une huile de CBD à large spectre (qui contient tous les actifs présents dans le cannabis, à l’exception du THC) ou à spectre complet (qui contient tous les principes actifs de la plante de chanvre avec une teneur maximum en THC de 0,3%).
            <br>
            <br>
            Certaines peuvent être associées à de la mélatonine pour un effet encore plus régulateur. Pour le dosage, il va principalement être lié au poids, il faut compter entre 0,5 mg et 1 mg de CBD par kg de poids corporel à prendre avant le coucher.
          <p>
            <font class="letter">O</font>
          <h3>Ainsi le dosage nécessaire pour </h3>
          <ul>
            <li>
              70 kg : 35-70 mg
            </li>
            <li>
              80 kg : vous pouvez prendre 40-80 mg
            </li>
            <li>
              90 kg : 45-90 mg
            </li>
            <li>
              100 kg : une dose de 50-100mg
            </li>
          </ul>
          </p>

          <p>

            <font class="letter">D</font>
            Il faudra bien sûr tester le dosage de base la première nuit d’après votre poids, puis en fonction des résultats obtenus, il faudra réajuster au besoin au fur et à mesure des nuits. Mais attention, la quantité de CBD dans une goutte d’huile est variable selon la concentration de celle-ci. Plus la concentration est haute et plus il y a de mg de CBD dans une goutte.
          </p>

          <p>
            <font class="letter">O</font>
          <h3>Ainsi, pour une huile à</h3>
          <ul>
            <li>
              15 % : il y a 7,5 mg de CBD/goutte
            </li>
            <li>
              20 % : il y a 10 mg de CBD/goutte 
            </li>
            <li>
              30 % : il y a 15 mg de CBD/goutte 
            </li>
            <li>
              40 % : il y a 20 mg de CBD/goutte 
            </li>
          </ul>

          Vous pouvez donc grâce à ceci calculer le nombre de goutte nécessaire selon la concentration, ou encore la concentration la plus rentable et adaptée à votre situation.
          </p>



          <div class="buttons">
            <div><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
              </svg></div>
            <div><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
              </svg></div>
          </div>
        </div>
        <div class="quote">
          <p>
            <font class="letter">“</font>
            Quand j’étais gosse, je fumais souvent.
            <br>
            Je ne pense pas que le cannabis soit plus dangereux que l’alcool.
          </p>
          <p class="author">Barack Obama</p>
        </div>
        <div class="words">

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