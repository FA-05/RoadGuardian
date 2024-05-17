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
<body >
        <div class="h-screen flex justify-center items-center">
            <div class="container mx-auto max-w-md px-6 py-8 mt-10 bg-white border border-gray-300 rounded-lg shadow-md">
                <h2 class="text-center p-4text-3xl mb-6">Login</h2>
                <form action="login" method="post">
                    <div class="mb-4">
                        <label class="block font-medium text-gray-700" for="username">Username</label>
                        <input type="username" id="username" class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500" id="username" name="username" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium text-gray-700" for="password">Password</label>
                        <input type="password" id="password" class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500" id="password" name="password" required>
                    </div>
                    <button type="button" id="btn-login" value="LOGIN" class="btn btn-primary w-full py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Login</button>
                </form>
                <br>
                <p class="text-center text-gray-600">Annulla e <a href="../home.php" class="text-blue-500 hover:text-blue-600">torna alla home</a></p>
            </div>
        </div>
        
    </body>
</html>


    
</body>
</html>