<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multa</title>

    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Scripts/formMultaScript.js"></script>
    <script src="../Scripts/utilitis.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../Style/generalStyle.css">
</head>
<?PHP
    session_start();
    if($_SESSION["logged-in"]==false){
        header("Location: ../Home.php");
    }

?>

<body id="page">
    <div class="mx-4 sm:mx-16 mb-4">
        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 flex justify-center items-center gap-1">

            <img class="ml-4 h-14 w-14" src="../icons/logo.png" alt="">
            <a href="vigileHome.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>

        </div>
    </div>

    <div class=" flex flex-col justify-center items-center">

        <form
            class="flex flex-col justify-center items-center shadow-lg bg-gray-100 gap-8 h-[43rem] w-[430px] rounded-[25px] m-4">
            <h1 class="text-2xl font-bold  text-center">Multa</h1>

            <div class="inputContainer">
                <p class="font-bold mb-2" for="targaVeicolo">Targa Veicolo</p>
                <input placeholder="AA111AA" class="px-4 w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="text" id="targaVeicolo"
                    list="targhe">
                <div id="opzioni-div" class=" bg-slate-50 absolute z-10 border rounded-lg">

                </div>

            </div>

            <div class="inputContainer">
                <p class="font-bold mb-2" for="luogo">Luogo</p>
                <input placeholder="Milano" class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="text" id="luogo">
            </div>

            <div class="inputContainer">
                <p class="font-bold mb-2" for="causaMulta">Causa Multa</p>
                <input placeholder="Eccesso di Velocità" class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="text" id="causaMulta">
            </div>

            <div class="inputContainer">
                <p class="font-bold mb-1" for="importo">Importo</p>
                <input placeholder="€" class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400" min="10" step="10"
                    type="number" id="importo">
            </div>

            <div class="inputContainer">
                <svg id="barcode"></svg>
            </div>

            <input id="btn-aggiungi-multa"
                class="w-[200px] bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                type="button" value="Salva">
        </form>
    </div>


    

    <div id="errorMessage" role="alert" class="alert alert-error fixed top-3 right-3 w-full max-w-xs md:max-w-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Compilare tutti i campi</span>
    </div>

</body>

</html>