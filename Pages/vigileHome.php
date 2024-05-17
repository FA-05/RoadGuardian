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

<body>

    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->



            <h1 class="text-center font-bold text-2xl p-4">Home Vigile</h1>
            <label for="my-drawer" class="m-2 btn bg-amber-200 drawer-button">Storico Multe</label>
            
            <div class="flex flex-col gap-3 justify-center items-center md:flex-row">
                <a href="formMulta.php">
                    <div
                        class="bg-blue-100 h-64 w-64  lg:h-96 lg:w-96 flex items-center justify-center border rounded-2xl flex-col">
                        <img class="w-44  p-4" src="../Icons/fine.png" alt="">
                        <h3>Nuova Multa</h3>
                    </div>
                </a>

                <a href="formIncidente.php">
                    <div
                        class="bg-blue-100 h-64 w-64 lg:h-96 lg:w-96 flex items-center justify-center border rounded-2xl flex-col">
                        <img class="w-44 p-4" src="../Icons/accident.png" alt="">
                        <h3>Segnala Incidente</h3>
                    </div>
                </a>
            </div>

            


            




        </div>
        <div class="drawer-side">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>

            </ul>
        </div>
    </div>








</body>

</html>