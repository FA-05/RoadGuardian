<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Scripts/loginScript.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="Style/generalStyle.css">
</head>

<body>

    <div class="mx-4 sm:mx-16">
        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 flex justify-center items-center gap-1">

            <img class="ml-4 h-14 w-14" src="../icons/logo.png" alt="">
            <a href="../home.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>

        </div>
    </div>


    <div class=" flex items-center justify-center h-screen pb-20">
    <div class="bg-gray-100 p-12 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-4xl font-bold mb-8 text-center">Login</h2>
        <form>
            <div class="mb-6">
                <label for="username" class="block text-gray-700 text-lg">Username</label>
                <input placeholder="Username" type="text" id="username" name="username" 
                       class="mt-2 p-3 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-8">
                <label for="password" class="block text-gray-700 text-lg">Password</label>
                <input placeholder="Password" type="password" id="password" name="password" 
                       class="mt-2 p-3 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <button id="btn-login" type="button" 
                    class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition-colors">Login</button>
        </form>
    </div>
    </div>


    <div id="errorMessage" role="alert" class="alert alert-error fixed top-3 right-3 w-full max-w-xs md:max-w-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Credenziali Sbagliate</span>
    </div>



    <?PHP
    
        include("footer.php")

    ?>


</body>

</html>