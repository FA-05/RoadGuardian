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

    <div class="mx-4 sm:mx-16">
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
                </ul>
            </div>
            <div class="navbar-end">
                <a href="Pages/loginPage.php" class="btn">Log-in</a>
            </div>
        </div>



        <!-- <div class="absolute top-[40vh] left-[35vw] z-[-10]">
        <img class="w-[350px] opacity-10" src="Icons/taxi-90.png" alt="">
    </div> -->

        <div class="absolute left-[39vw] top-[15vh] md:top-[20vh] md:left-[42vw] ">
            <img class=" w-32 h-32 md:w-64 md:h-64  z-[-10]" src="Icons/taxi-big-loudspeaker.gif" alt=""
                class="w-full h-full object-cover">
        </div>

        <section id="Home" class="h-[25rem] flex justify-center items-center mb-24 md:h-[40rem]">
            <p class="leading-loose text-center text-3xl font-bold md:text-5xl lg:text-6xl mt-4 md:mt-8">
                La strada non è mai stata così <span class="bg-yellow-200 p-2 rounded-lg ">SICURA</span>
            </p>
        </section>




        <h1 class="mt-34 p-4 text-4xl font-bold ">About Us</h1>

        <section id="AboutUs" class="h-[30rem] flex flex-col md:flex-row justify-start">

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
        <h1 class="text-4xl font-bold ">Barcode</h1>

        <section id="Barcode" class="h-[39rem] flex flex-col md:flex-row items-center justify-start p-4">

            <div class="w-full md:w-1/3">
                <img class="mx-auto mb-4 md:mb-0" src="Icons/Police-Barcode.png" alt="">
            </div>
            <div class="w-full md:w-2/3 flex flex-col md:flex-row items-center justify-center">
                <input id="code" type="text" placeholder="Barcode or CF"
                    class="input input-bordered w-full md:max-w-md" />
                <button id="btn-invia-codice"
                    class="btn bg-amber-300 hover:bg-amber-400 mt-4 md:mt-0 md:ml-4">Invia</button>
            </div>
        </section>

        <h1 class="text-4xl font-bold mb-2">FAQ</h1>


        <div class="h-[25em]">
            <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-200 mb-2">
                <div class="collapse-title text-xl font-medium">
                    Cosa succede se non pago la multa entra la data di scadenza?
                </div>
                <div class="collapse-content">
                    <p>tabindex="0" attribute is necessary to make the div focusable</p>
                </div>
            </div>
            <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-200 mb-2">
                <div class="collapse-title text-xl font-medium">
                    Dove trovo il barcode del sinistro/multa?
                </div>
                <div class="collapse-content">
                    <p>tabindex="0" attribute is necessary to make the div focusable</p>
                </div>
            </div>
            <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-200 mb-2">
                <div class="collapse-title text-xl font-medium">
                   Come faccio a visualizzare tutti i miei sinistri/multe?
                </div>
                <div class="collapse-content">
                    <p>tabindex="0" attribute is necessary to make the div focusable</p>
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





    <footer class="footer p-10 bg-neutral text-neutral-content">
        <aside>
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                clip-rule="evenodd" class="fill-current">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p>Road Guardian<br>2024 © Ali Raja Faizan </p>
        </aside>
        <nav>
            <h6 class="footer-title">Social</h6>
            <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg></a>
            </div>
        </nav>
    </footer>

</body>

</html>