<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidente</title>

    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Scripts/formIncidenteScript.js"></script>
    <script src="../Scripts/utilitis.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../Style/generalStyle.css">
</head>
<?php
    session_start();
    if($_SESSION["logged-in"]==false){
        header("Location: ../Home.php");
    }
?>

<body id="page">
    <div class="mx-4 sm:mx-16 mb-4">
        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 flex justify-center items-center gap-1 ">

            <img class="ml-4 h-14 w-14" src="../Icons/logo.png" alt="">
            <a href="vigileHome.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>

        </div>
    </div>

    <div class="flex flex-col justify-center items-center mb-36">
        <form
            class="flex flex-col justify-center items-center shadow-lg bg-gray-200 gap-8 h-auto w-[50rem] rounded-[25px] m-4 p-4">
            <h1 class="text-2xl font-bold text-center">Guidatori</h1>

            <div class="h-fit  p-4 w-full flex justify-center items-center">
                <div>
                    <div class="grid grid-cols-2 mb-2">
                        <p class="font-bold">Targa Veicolo</p>
                        <p class="font-bold">CF guidatore </p>
                    </div>

                    <div id="infoGuidatore" class="grid gap-2">
    <div id="default-info" class="grid grid-cols-2 gap-2 relative">
        <input data-id="1" placeholder="1° Targa" id="targa-1"
            class="targaVeicolo px-4 w-[300px] h-[40px] rounded-md focus:outline-blue-400"
            type="text">
        <div id="opzioni-targa-div-1" class="bg-slate-200 absolute z-10 mt-10">
        </div>
        <div class="relative flex items-center">
            <input data-id="1" placeholder="1° CF" id="CF-1"
                class="cfGuidatore px-4 w-[300px] h-[40px] rounded-md focus:outline-blue-400"
                type="text">
            <button type="button" class="ml-2 px-2 py-1 bg-red-500 text-white rounded-md">X</button>
        </div>
        <div id="opzioni-CF-div-1" class="bg-slate-200 absolute z-10 mt-10 ml-[19.2rem]">
        </div>
    </div>
</div>


                    <button id="btn-add" type="button"
                        class="btn btn-sm border border-none bg-green-300 w-full mt-2">+</button>
                </div>
            </div>
        </form>
        <form
            class="flex flex-col justify-center items-center shadow-lg bg-gray-200 gap-8 h-auto w-[50rem] rounded-[25px] m-4 p-4">
            <h1 class="text-2xl font-bold text-center">Incidente</h1>
            <div>
                <p class="font-bold mb-2" for="luogo">Luogo</p>
                <input placeholder="Milano" class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400"
                    type="text" id="luogo">
            </div>

            <div>
                <p class="font-bold mb-2" for="causaIncidente">Causa incidente</p>
                <input placeholder="Precedenza non rispettata"
                    class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="text" id="causaIncidente">
            </div>


            <div>
                <p class="font-bold mb-2" for="">Numero morti</p>
                <input value="0" placeholder="0" min="0" class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400"
                    type="number" id="numeroMorti">
            </div>

            <div>
                <p class="font-bold mb-2" for="causaMulta">Numero feriti</p>
                <input value="0" placeholder="0" min="0" class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400"
                    type="number" id="numeroFeriti">
            </div>


            <div class="inputContainer">
                <svg id="barcode"></svg>
            </div>

            <input id="btn-salva-incidente"
                class="w-[200px] bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                type="button" value="Salva">
        </form>

        <div id="errorMessage" role="alert" class="alert alert-error fixed top-3 right-3 w-full max-w-xs md:max-w-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Compilare tutti i campi</span>
        </div>

    </div>
</body>

</html>