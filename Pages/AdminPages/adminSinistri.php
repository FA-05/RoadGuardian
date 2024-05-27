<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../../Scripts/adminSinistriScript.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../Style/generalStyle.css">
    <title>Admin</title>
</head>

<?PHP
    session_start();

    if($_SESSION["logged-in"]== true && $_SESSION["tipo"] == "admin"){
        
    }else{
        header("Location: ../../home.php");
    }

?>

<body>

    <div class="mx-4">

        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 ">
            <div class="navbar-start">
                <img class="ml-4 h-14 w-14" src="../../Icons/logo.png" alt="">
                <a href="vigileHome.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>
            </div>
            <div class="navbar-center">
                <h1 class="text-center font-bold text-2xl p-4">Admin</h1>
            </div>
            <div class="navbar-end">
                <a id="btn-log-out" class="btn">Log-out</a>
            </div>
        </div>

        <div class="flex justify-center items-center mt-7">
        <div role="tablist" class="tabs tabs-boxed w-[600px]">
            <a href="adminHome.php" role="tab" class="tab ">Multe</a>
            <a href="adminSinistri.php" role="tab" class="tab tab-active">Sinistri</a>
            <a href="adminPatentati.php" role="tab" class="tab">Patentati</a>
            <a href="adminVeicoli.php" role="tab" class="tab">Veicoli</a>
            <a href="adminVigili.php" role="tab" class="tab">Vigili</a>

        </div>
        </div>
        
        <div class="flex p-4">
            <div class="bg-slate-100 flex items-center p-2 rounded-lg gap-2">
                <p class="text-md font-bold">Cerca:</p>
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="Cerca..."
                        class="px-4 py-2 pl-10 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <svg class="w-5 h-5 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M16.65 10.4A6.65 6.65 0 1010.4 16.65 6.65 6.65 0 0016.65 10.4z"></path>
                    </svg>
                </div>
            </div>
        </div>


        <table class="table w-full mt-12 text-left divide-y divide-gray-200 rounded-lg">
            <thead class="bg-slate-200 rounded-tl-lg rounded-tr-lg">
                <tr class="">
                    <th class="px-6 py-5 text-md font-bold text-black uppercase tracking-wider">Barcode</th>
                    <th class="px-6 py-5 text-md font-bold text-black uppercase tracking-wider">Targa Veicoli</th>
                    <th class="px-6 py-5 text-md font-bold text-black uppercase tracking-wider">CF Guidatori</th>
                    <th class="px-6 py-5 text-md font-bold text-black uppercase tracking-wider">data-ora</th>
                    <th class="px-6 py-5 text-md font-bold text-black uppercase tracking-wider">luogo</th>
                    <th class="px-6 py-5 text-md font-bold text-black uppercase tracking-wider">Causa Incidente</th>
                    <th class="px-6 py-5 text-md font-bold text-black uppercase tracking-wider">Feriti</th>
                    <th class="px-6 py-5 text-md font-bold text-black uppercase tracking-wider">Morti</th>
                    
                    
                </tr>
                </thead>
            <tbody id="Table" class="bg-white divide-y divide-gray-200">
            </tbody>
        </table>


    </div>



</body>

</html>