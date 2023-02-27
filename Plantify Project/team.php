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
    <link rel="icon" type="image/png" href="./Images/favicon_canabis.png" />
    <title>Team</title>
</head>

<body class="bg-white dark:bg-gray-900 h-screen flex items-center justify-center mt-20">


    <!-- Navbar -->
    <?php
    include_once('./navbar.php');
    ?>

    <section class="bg-white dark:bg-gray-900 mt-10">
        <h2 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white px-4 sm:px-6 lg:px-8">Our Team</h2>

        <div class="container px-6 py-8 mx-auto mt-10">

            <div class="grid gap-4 md:gap-8 mt-4 md:mt-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="./Images/team/Saltiplouf.png" alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">SaltiPlouf</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Co-founder</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="./Images/team/Monkeydpab.jpg" alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Monkeydpab</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Co-founder</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="./Images/team/blogeuse.jpg" alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">R-IA</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Blogeuse</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="./Images/team/Hakim on ta cramé.jpg" alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Hakim</h3>
                        <span class="mt-1 mb-5 font-medium text-gray-600 dark:text-gray-300">Support and Supplier weed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>