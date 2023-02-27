    <?php
    session_start(); 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./Images/favicon_canabis.png" />

    <title>editprofile</title>
</head>
<body>

    
<body class="h-screen overflow-hidden flex items-center justify-center">


    <div class="py-4 w-300">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('./Images/Chanvre.jpg')">
            </div>

            <div class="w-full h-80 p-8 lg:w-1/2 ">

                <div class="mx-auto">
                  

                    <form method="POST" action="./mettreajourprofile.php" enctype="multipart/form-data">
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email"  class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                            </div>
                            <input type="text" id="nom" name="nom"  class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Prénom</label>
                            </div>
                            <input type="text" id="prenom" name="prenom"  class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Pseudo</label>
                            </div>
                            <input type="text" id="pseudo" name="pseudo"  class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            </div>
                            <input type="password" id="password" name="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                            </div>
                            <input type="password" id="passconf" name="passconf" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-2">
                            <div class="flex justify-between">
                                <label  class="block text-gray-700 text-sm font-bold mb-2">Photo profile</label>
                            </div>
                            <input  type="file" name="profilepicture" id="profilepicture" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none">
                        </div>

                        <div class="mt-4">
                            <button type="submit" value="Save" name="save" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Mettre à jour</button>
                        </div>

                        <div class="mt-2 flex items-center justify-between">
                            <span class="border-b w-1/5 md:w-1/4"></span>
                            <a href="./feed.php" class="text-xs text-gray-500 uppercase">Retour</a>
                            <span class="border-b w-1/5 md:w-1/4"></span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</body>
</html>