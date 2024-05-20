<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Guardian</title>
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="Scripts/homeScript.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="Style/generalStyle.css">
</head>

<body>

    <div id="page" class="mx-4 sm:mx-16">
        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#AboutUs">About us</a></li>
                        <li><a href="#Barcode">Barcode</a></li>
                        <li><a href="#FAQ">FAQ</a></li>
                    </ul>
                </div>
                <img class="ml-4 h-14 w-14" src="icons/logo.png" alt="">
                <a class="hidden sm:inline text-xl font-bold">Road Guardian</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li class="text-black font-bold text-xl"><a href="#Home">Home</a></li>
                    <li class="text-black font-bold text-xl"><a href="#AboutUs">About us</a></li>
                    <li class="text-black font-bold text-xl"><a href="#Barcode">Barcode</a></li>
                    <li class="text-black font-bold text-xl"><a href="#FAQ">FAQ</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a href="Pages/loginPage.php" class="btn">Log-in</a>
            </div>
        </div>





        <div class="absolute left-[39vw] top-[15vh] md:top-[14vh] md:left-[42vw] ">
            <img class=" w-32 h-32 md:w-64 md:h-64  z-[-10]" src="Icons/taxi-big-loudspeaker.gif" alt=""
                class="w-full h-full object-cover">
        </div>

        <section id="Home" class="h-[25rem] flex justify-center items-center mb-24 md:h-[40rem]">
            <p class="leading-loose text-center text-3xl font-bold md:text-5xl lg:text-6xl mt-4 md:mt-8">
                La strada non è mai stata così <span class="bg-yellow-200 p-2 rounded-lg ">SICURA</span>
            </p>
        </section>




        <h1 id="AboutUs" class="mt-34 p-4 text-4xl font-bold ">About Us</h1>

        <section  class="h-[30rem] flex flex-col md:flex-row justify-start">

            <p class="w-full md:w-1/2 text-center md:text-left text-sm md:text-xl p-4">
                Benvenuti nella sezione del Comando dei <b>Vigili Urbani di Torino Nord</b>, un ente dedicato a
                migliorare
                la sicurezza stradale e l'efficienza nella gestione delle violazioni del codice della strada.<br>
                Il nostro sistema avanzato consente ai vigili di registrare incidenti e multe direttamente sul campo,
                fornendo accesso immediato ai dettagli tramite un <span class="bg-yellow-200 p-1 rounded-lg"><b>
                        barcode.</b></span>
            </p>
            <div class="w-full md:w-1/2">
                <img class="h-48 md:h-96 mx-auto" src="Icons/taxi-policeman.png" alt="">
            </div>
        </section>
        <h1 id="Barcode" class="text-4xl font-bold ">Barcode</h1>

        <section  class="h-[39rem] flex flex-col md:flex-row items-center justify-start p-4">

            <div class="w-full md:w-1/3">
                <img class="mx-auto mb-4 md:mb-0" src="Icons/Police-Barcode.png" alt="">
            </div>
            <div class="w-full md:w-2/3 flex flex-col md:flex-row items-center justify-center">
                <input id="code" type="text" placeholder="Barcode/Numero-Patente"
                    class="input input-bordered w-full md:max-w-md" />
                <button id="btn-invia-codice"
                    class="btn bg-amber-300 hover:bg-amber-400 mt-4 md:mt-0 md:ml-4">Invia</button>
            </div>
        </section>

        <h1 id="FAQ" class="text-4xl font-bold mb-2">FAQ</h1>


        <div class="h-[25em]">
            <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-200 mb-2">
                <div class="collapse-title text-xl font-medium">
                    Cosa succede se non pago la multa entra la data di scadenza?
                </div>
                <div class="collapse-content">
                    <p>Se la multa non viene pagata entro la data di scadenza, l'importo verrà raddoppiato.</p>
                </div>
            </div>
            <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-200 mb-2">
                <div class="collapse-title text-xl font-medium">
                    Dove trovo il barcode del sinistro/multa?
                </div>
                <div class="collapse-content">
                    <p>Il barcode viene inviato via email. Controlla anche nella cartella spam.</p>
                </div>
            </div>
            <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-200 mb-2">
                <div class="collapse-title text-xl font-medium">
                    Come faccio a visualizzare tutti i miei sinistri/multe?
                </div>
                <div class="collapse-content">
                    <p>Inserisci il numero della tua patente invece del barcode.</p>
                </div>
            </div>
        </div>


        <div id="errorMessage" role="alert" class="alert alert-error fixed top-3 right-3 w-full max-w-xs md:max-w-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Barcode insesistente!</span>
        </div>
    </div>





    <?PHP
        include("Pages/footer.php")
    ?>

</body>

</html>