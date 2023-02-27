<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./navbar.css" rel="stylesheet">
    <link href="./darkmode.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config = {darkMode: "class",};</script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/a4d2894726.css" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-white dark:bg-gray-900 ">
  

    <nav class="mobile-bottom-nav overflow-visible">

        <div class="mobile-bottom-nav__item">
            <a href="./blogv2.php" class="mobile-bottom-nav__item-content" type="submit">
                <i class="fa-solid fa-blog fa-md" ></i>
            </a>
        </div>

        <div class="mobile-bottom-nav__item">
            <a href="./team.php" class="mobile-bottom-nav__item-content" type="submit">
                <i class="fa-sharp fa-solid fa-people-group fa-md"></i>
            </a>
        </div>

        <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
            <a href="./feed.php" class="mobile-bottom-nav__item-content" type="submit">
                <i class="fa-solid fa-house fa-md"></i>
            </a>
        </div>

        <div class="mobile-bottom-nav__item">
            <a href="./editprofile.php" class="mobile-bottom-nav__item-content" type="submit">
                <i class="fa-solid fa-user fa-md"></i>
            </a>
        </div>

        <div class="mobile-bottom-nav__item">
                <a href="./deconnect.php" class="mobile-bottom-nav__item-content" type="submit">
                    <i class="fa-solid fa-circle-xmark fa-md"></i>
                </a>    
        </div>
           <!-- Dark Mode -->
           <div class=" flex flex-row justify-between toggle">
            <label for="dark-toggle" class="flex items-center cursor-pointer">
                <div class="relative">
                    <input type="checkbox" name="dark-mode" id="dark-toggle" class="checkbox hidden">
                    <div class="block border-[1px] border-gray-900 w-14 h-8 rounded-full"></div>
                    <div class="dot absolute left-1 top-1  bg-gray-800 w-6 h-6 rounded-full transition"></div>
                </div>
                <div class="ml-3 text-gray-900 font-medium">
                   Dark
                </div>
            </label>
        </div>
    </nav>

    <script src="darkmode.js"></script>
    <script src="https://kit.fontawesome.com/a4d2894726.js" crossorigin="anonymous"></script>
    
</body>
</html>
