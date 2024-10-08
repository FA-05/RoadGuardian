<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoMulta</title>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Scripts/infoMultaScript.js"></script>
    <script src="../Scripts/utilitis.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="stylesheet" href="../Style/generalStyle.css">

</head>

<?PHP
    session_start();
   
?>

<body>



    <div class="mx-4 sm:mx-16">
        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 flex justify-center items-center gap-1 ">

            <img class="ml-4 h-14 w-14" src="../Icons/logo.png" alt="">
            <a id="link" href="../home.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>

        </div>
    </div>

    <div class="flex flex-col items-center min-h-screen p-4 mt-10">
        <div class="bg-gray-100 p-8 rounded-[25px] shadow-2xl w-full max-w-md h-[520px]">
            <h1 class="text-black text-3xl font-bold uppercase mb-6 text-center">MULTA</h1>

       

            <div class="flex justify-between items-center py-2 mb-3">
                <h3 class="font-semibold">Targa</h3>
                <p id="targaVeicolo" class="text-gray-700"></p>
            </div>

            <div class="flex justify-between items-center py-2 mb-3">
                <h3 class="font-semibold">data-ora</h3>
                <p id="data_ora" class="text-gray-700"></p>
            </div>

            <div class="flex justify-between items-center py-2 mb-3">
                <h3 class="font-semibold">Luogo</h3>
                <p id="luogo" class="text-gray-700"></p>
            </div>

            <div class="flex justify-between items-center py-2 mb-3">
                <h3 class="font-semibold">Causa Multa</h3>
                <p id="causaMulta" class="text-gray-700"></p>
            </div>

            <div class="flex justify-between items-center py-2 mb-3">
                <h3 class="font-semibold">Importo</h3>
                <p id="importo" class="text-gray-700"></p>
            </div>

            <div class="flex justify-between items-center py-2 mb-3">
                <h3 class="font-semibold">Scadenza Importo</h3>
                <p id="scadenzaImporto" class="text-gray-700"></p>
            </div>

            <div class="flex  items-center justify-center py-2 mb-3">
                <svg id="barcode"></svg>
            </div>

            <div class="mt-[3rem] flex justify-center ">
                <button id="paga-btn"
                    class=" w-[200px] bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    PAGA
                </button>
                <button id="already-pagato-btn"
                    class=" w-[200px] bg-green-500 text-white px-4 py-2 rounded focus:outline-none ">
                    ✔️
                </button>
            </div>
        </div>
    </div>

    <div id="conferma-alert" role="alert" class="alert alert-success fixed top-3 right-3 w-[300px]">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Pagamento efettuato con successo</span>
    </div>

    <div id="info-alert" role="alert" class="alert alert-info fixed top-3 right-3 w-[300px]">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>Pagamento già effettuato</span>
    </div>

    <?PHP
    
        include("footer.php")

    ?>


</body>

</html>