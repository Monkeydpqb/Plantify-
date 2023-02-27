<?php
        session_start();
        require("infos.php");
        @$valider = $_POST["save"];
        $erreur = "";
        if (isset($valider)) {
            if (empty($nom)) $erreur = "Le chanmps nom est obligatoire!";
            elseif (empty($prenom)) $erreur = "Le chanmps prénom est obligatoire!";
            elseif (empty($email)) $erreur = "Le chanmps email est obligatoire!";
            elseif (empty($pseudo)) $erreur = "Le chanmps Pseudo est obligatoire!";
            elseif (empty($password)) $erreur = "Le chanmps mot de passe est obligatoire!";
            elseif ($password != $passwordConf) $erreur = "Mots de passe differents!";
            else {

                require("connect.php");
                $verify_email = $db->prepare("select id from users where email=? limit 1");
                $verify_email->execute(array($email));
                $user_email = $verify_email->fetchAll();
                if (count($user_email) > 0)
                    $erreur = "Email existe déjà!";
                else {
                    $ins = $db->prepare("insert into users(nom,prenom,email,pseudo,password) values(?,?,?,?,?)");
                    if ($ins->execute(array($nom, $prenom, $email, $pseudo, md5($password))))
                        header("location:feed.php");
                }
            }
        }
        ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #d8f3dc;">


    <div class="py-4 w-300">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('./Images/Chanvre.jpg')">
            </div>

            <div class="w-full h-80 p-8 lg:w-1/2 ">

                <div class="mx-auto">
                    <div class="logoplantify">
                        <img class="flex rounded-md items-center ml-6 mb-2 " src="./Images/LogoPlantify.png" alt="">
                    </div>

                    <form name="fo" method="post" action="">
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                            <input type="email" id="email" name="email" value="<?= $email  ?>" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                            </div>
                            <input type="text" id="nom" name="nom" value="<?= $nom  ?>" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Prénom</label>
                            </div>
                            <input type="text" id="prenom" name="prenom" value="<?= $prenom  ?>" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Pseudo</label>
                            </div>
                            <input type="text" id="pseudo" name="pseudo" value="<?= $pseudo  ?>" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            </div>
                            <input type="password" id="password" name="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            </div>
                            <input type="password" id="passconf" name="passconf" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-4">
                            <button type="submit" value="Save" name="save" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">REGISTER</button>
                        </div>

                        <div class="mt-2 flex items-center justify-between">
                            <span class="border-b w-1/5 md:w-1/4"></span>
                            <a href="./login.php" class="text-xs text-gray-500 uppercase">or login</a>
                            <span class="border-b w-1/5 md:w-1/4"></span>
                        </div>
                    </form>

                </div>
            </div>
        </div>

</body>
</html>