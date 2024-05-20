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

<?PHP
     session_start();
     if($_SESSION["logged-in"]==false){
         header("Location: ../Home.php");
     }


?>


<body>

    <div class="mx-4 sm:mx-16 mb-4">
        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 flex justify-center items-center gap-1">

            <img class="ml-4 h-14 w-14" src="../icons/logo.png" alt="">
            <a href="vigileHome.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>

        </div>
    </div>


    <div class="flex flex-col items-center justify-center mt-20 h-120">
        <div class="relative bg-gray-100 rounded-lg shadow-xl w-full max-w-4xl p-10 mb-4">
            <button id="ritira-btn" type="button"
                class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition duration-300 ease-in-out">Ritira
                Patente</button>
            <p id="nomeCognome" class="font-bold text-3xl mb-4 text-center"></p>

            <div class="grid grid-cols-3 gap-6">
                <div>
                    <div class="grid grid-cols-2 items-center mb-4 w-max">
                        <p class="font-semibold text-lg mr-2">Numero Patente:</p>
                        <p id="numeroPatente"></p>
                    </div>

                    <div class="grid grid-cols-2 items-center mb-4">
                        <p class="font-semibold text-lg">Punti Patente:</p>
                        <p id="puntiPatente"></p>
                    </div>

                    <div class="mb-6">
                        <label for="remove-points" class="font-semibold text-lg">Togli punti:</label>
                        <input value="0" id="remove-points" type="number" min="0" max="15"
                            class="input input-bordered w-full max-w-[6rem]">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="h-full w-0.5 bg-gray-300"></div>
                </div>

                <div>
                    <div id="sinistri" class="mb-4">
                        <p class="font-semibold text-lg mb-1">Sinistri Precedenti:</p>
                    </div>
                </div>
            </div>

            <div id="arrow-btn" class="flex justify-between items-center mt-6">
                <button id="before-btn" type="button"
                    class="btn bg-blue-500 text-white px-4 py-2 w-24  rounded-lg shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">←</button>
                <button id="next-btn" type="button"
                    class="btn bg-blue-500 text-white px-4 py-2 w-24 rounded-lg shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">→</button>
            </div>
        </div>

        <button id="salva-btn"
            class="btn bg-green-500 text-white w-[25%] py-3 rounded-lg shadow-md hover:bg-green-600 transition duration-300 ease-in-out">Salva</button>
    </div>

</body>

</html>