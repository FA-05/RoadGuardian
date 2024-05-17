<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Scripts/formGuidatoriScript.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../Style/generalStyle.css">
    <title>Driver Information</title>
</head>
<body class="bg-gray-100">

    <h1 class="font-bold text-center text-4xl py-6 text-blue-800">Guidatori</h1>

    <div class="flex flex-col items-center justify-center min-h-screen gap-7">

        <div class="w-full max-w-4xl p-8 bg-white rounded-lg shadow-lg relative">
            <button id="ritira-btn" type="button" class="btn btn-error btn-primary absolute right-8 top-8">Ritira Patente</button>
            
            <p id="nomeCognome" class="font-bold text-3xl text-gray-700 mb-4"></p>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <p class="font-semibold text-lg">Numero Patente:</p>
                <p id="numeroPatente"></p>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <p class="font-semibold text-lg">Punti Patente:</p>
                <p id="puntiPatente"></p>
            </div>

            <div id="sinistri" class="mb-4">
                <p class="font-semibold text-lg mb-1">Sinistri Precedenti:</p>

            </div>

            <div class="mb-6">
                <label for="remove-points" class="font-semibold text-lg">Togli punti:</label>
                <input value="0" id="remove-points" type="number" min="0" max="15" class="input input-bordered w-full max-w-xs">
            </div>

            <div id="arrow-btn" class="flex justify-between items-center ">
                <button id="before-btn" type="button" class="btn btn-md btn-info w-24 bg mr-2">←</button>
                <button id="next-btn" type="button" class="btn w-24 btn-md btn-info">→</button>
            </div>
        </div>

        <button id="salva-btn" class="btn btn-primary  btn-success btn-md btn-wide">Salva</button>

    </div>



</body> 
</html>
