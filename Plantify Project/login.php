<?php
session_start();
include("infos.php");
@$valider = $_POST["login"];
$erreur = "";
if (isset($valider)) {
    include("connect.php");
    $verify = $db->prepare("select * from users where email=? and password=? limit 1");
    $verify->execute(array($email, $pass_crypt));
    $user = $verify->fetchAll();
    if (count($user) > 0) {
        $_SESSION["prenom_nom"] = ucfirst(strtolower($user[0]["prenom"])) .
            " "  .  strtoupper($user[0]["nom"]);
        $_SESSION["connecter"] = "yes";
        $_SESSION["id"] = $user[0]["id"];
        $_SESSION["email"] = $user[0]["email"];
        $_SESSION["admin"] = $user[0]["admin"];
        $_SESSION["pseudo"] = $user[0]["pseudo"];
        $_SESSION["nom"] = $user[0]["nom"];
        $_SESSION["prenom"] = $user[0]["prenom"];
        header("location:feed.php");
    } else
        $erreur = "Mauvais login ou mot de passe!";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link to Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <script>tailwind.config = {darkMode: "class",};</script>

    <link rel="stylesheet" href="./darkmode.css">

</head>

<body class="bg-white dark:bg-gray-900 overflow-hidden flex items-center justify-center">

    <div class="py-6">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">




            <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('./Images/Chanvre.jpg')"></div>

            <div class="bg-white dark:bg-gray-900 w-full p-8 lg:w-1/2 ">

                <div class="mx-auto">
                    <img class=" flex rounded-md items-center w-100 mb-5 " src="./Images/LogoPlantify.png" alt="">

                    <!-- darkmode button -->
                    <div class="flex flex-row justify-between toggle">
                        <label for="dark-toggle" class="flex items-center cursor-pointer">
                            <div class="relative">
                                <input type="checkbox" name="dark-mode" id="dark-toggle" class="checkbox hidden">
                                <div class="block border-[1px] dark:border-white border-gray-900 w-14 h-8 rounded-full"></div>
                                <div class="dot absolute left-1 top-1 dark:bg-white bg-gray-800 w-6 h-6 rounded-full transition"></div>
                            </div>
                            <div class="ml-3 dark:text-white text-gray-900 font-medium">
                                Dark Mode
                            </div>
                        </label>
                    </div>

                    <div class="erreur"><?php echo  $erreur  ?></div>

                    <form method="post" action="">
                        <div class="mt-4">
                            <label class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email">
                        </div>

                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Password</label>

                                <a href="#" class="text-xs text-gray-500 dark:text-white">Forget Password?</a>
                            </div>

                            <input type="password" id="password" name="password" class=" bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-8">
                            <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600" type="submit" name="login" value="Login">Login
                            </button>
                        </div>
                    </form>

                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="./register.php" class="text-xs text-gray-500 uppercase dark:text-white">or sign up</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
                    </div>
                </div>
            </div>
        </div>

        <script src="darkmode.js"></script>
</body>

</html>