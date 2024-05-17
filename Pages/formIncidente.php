<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidente</title>

    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Scripts/incidenteScript.js"></script>
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
    <a href="vigileHome.php">
        <button class="btn btn-warning mt-2 ml-2  md:absolute md:top-4 md:left-4">
            <img class="w-12 h-12" src="../Icons/back.png" alt="">
        </button>
    </a>

    <div class="flex flex-col justify-center items-center">
        <form
            class="flex flex-col justify-center items-center shadow-lg bg-blue-100 gap-8 h-auto w-[50rem] rounded-[25px] m-4 p-4">
            <h1 class="text-2xl font-bold text-center">Info Guidatori</h1>

            <div class="h-fit  p-4 w-full flex justify-center items-center">
                <div>
                    <div class="grid grid-cols-2 mb-2">
                        <p class="font-bold">Targa Veicolo</p>
                        <p class="font-bold">CF guidatore </p>
                    </div>

                    <div id="infoGuidatore" class="grid gap-2">
                        <div id="default-info" class="grid grid-cols-2 gap-2">
                            <input data-id="1" placeholder="1° Targa" id="targa-1" class="targaVeicolo  px-4 w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="text">
                            <div id="opzioni-targa-div-1" class=" bg-slate-200 absolute z-10 mt-10">

                            </div>
                            <input data-id="1" placeholder="1° CF" id="CF-1" class="cfGuidatore px-4 w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="text">
                            <div id="opzioni-CF-div-1" class=" bg-slate-200 absolute z-10 mt-10 ml-[19.2rem]">

                            </div>
                        </div>

                    </div>

                    <button id="btn-add" type="button"
                        class="btn btn-sm border border-none bg-green-300 w-full mt-2">+</button>
                </div>
            </div>
        </form>
        <form
            class="flex flex-col justify-center items-center shadow-lg bg-blue-100 gap-8 h-auto w-[50rem] rounded-[25px] m-4 p-4">
            <h1 class="text-2xl font-bold text-center"> Incidente</h1>
            <div  >
                    <p class="font-bold mb-2" for="luogo">Luogo</p>
                    <input class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="text" id="luogo">
                </div>

                <div  >
                    <p class="font-bold mb-2" for="causaIncidente">Causa incidente</p>
                    <input class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="text" id="causaIncidente">
                </div>


                <div  >
                    <p class="font-bold mb-2" for="">Numero morti</p>
                    <input min="0" class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="number" id="numeroMorti">
                </div>

                <div  >
                    <p class="font-bold mb-2" for="causaMulta">Numero feriti</p>
                    <input min="0" class="px-4  w-[300px] h-[40px] rounded-md focus:outline-blue-400" type="number" id="numeroFeriti">
                </div>

                <div  >
                <label for="foto" class="font-bold">Foto incidente</label>
                    <input type="file" id="fotoIncidente" name="foto[]" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200" accept="image/*" multiple>
                </div>

                <div class="inputContainer">
                    <svg id="barcode"></svg>
                </div>

                <input id="btn-salva-incidente"
                class="w-[200px] bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                type="button" value="Salva">
                

        </form>

    </div>
</body>

</html>