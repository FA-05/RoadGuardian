<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homeVigile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Scripts/vigileHomeScript.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<?PHP
    session_start();
    if($_SESSION["logged-in"]==false){
        header("Location: ../Home.php");
    }
 
?>

<body>

    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content mx-4">


            <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 ">
                <div class="navbar-start">
                    <img class="ml-4 h-14 w-14" src="../Icons/logo.png" alt="">
                    <a href="vigileHome.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>
                </div>
                <div class="navbar-center">
                    <h1 class="text-center font-bold text-2xl p-4">Home Vigile</h1>
                </div>
                <div class="navbar-end">
                    <a id="btn-log-out" class="btn">Log-out</a>
                </div>
            </div>


            <label for="my-drawer" class="m-2 btn bg-amber-200 drawer-button">Multe e Sinistri Segnalati</label>

            <div class="flex flex-col gap-6 justify-center items-center md:flex-row">
                <a href="formMulta.php" class="transform hover:scale-105 transition-transform">
                    <div
                        class="bg-white shadow-md h-64 w-64 lg:h-80 lg:w-80 flex items-center justify-center border border-gray-200 rounded-xl flex-col p-4">
                        <div class="h-60 flex justify-center items-center">
                            <img class="w-32 lg:w-52 " src="../Icons/Multa-icon.png" alt="Nuova Multa">

                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Nuova Multa</h3>
                        </div>

                    </div>
                </a>

                <a href="formIncidente.php" class="transform hover:scale-105 transition-transform">
                    <div
                        class="bg-white shadow-md h-64 w-64 lg:h-80 lg:w-80 flex items-center justify-center border border-gray-200 rounded-xl flex-col p-4">
                        <div class="h-60 flex justify-center items-center">
                            <img class="w-90 " src="../Icons/accident-icon.png" alt="Segnala Incidente">

                        </div>
                        <div >
                            <h3 class="text-lg font-semibold text-gray-700">Segnala Incidente</h3>

                        </div>
                    </div>
                </a>
            </div>









        </div>
        <div class="drawer-side">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-60 min-h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <div id="Multe" class="mt-4 ">
                    <li class="font-bold text-lg"><a>Multe</a></li>
                </div>



                <div id="Sinistri" class="mt-4 ">
                    <li class="font-bold text-lg"><a>Sinistri</a></li>
                </div>


            </ul>
        </div>
    </div>

    <div id="successMessage" role="alert" class="alert alert-success fixed top-3 right-3 w-full max-w-xs md:max-w-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span id="messggio"></span>
    </div>








</body>

</html>