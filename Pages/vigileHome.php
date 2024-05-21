<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homeVigile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<?PHP
session_start();
if ($_SESSION["logged-in"] == false) {
    header("Location: ../index.php");
}

?>

<body>

    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content mx-4">


            <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300">
                <div class="navbar-start">
                    <img class="ml-4 h-14 w-14" src="../assets/Icons/logo.png" alt="">
                    <a href="vigileHome.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>
                </div>
                <div class="navbar-center">
                    <h1 class="text-center font-bold text-2xl p-4">Home Vigile</h1>
                </div>
                <div class="navbar-end">
                    <a id="btn-log-out" class="btn">Log-out</a>
                </div>
            </div>


            <label for="my-drawer" class="m-2 btn bg-amber-200 drawer-button">Storico Multe</label>

            <div class="flex flex-col gap-3 justify-center items-center md:flex-row">
                <a href="formMulta.php">
                    <div
                        class="bg-gray-100 shadow-lg h-64 w-64  lg:h-96 lg:w-96 flex items-center justify-center border rounded-2xl flex-col">
                        <img class="w-44  p-4" src="../assets/Icons/fine.png" alt="">
                        <h3>Nuova Multa</h3>
                    </div>
                </a>

                <a href="formIncidente.php">
                    <div
                        class="bg-gray-100 shadow-lg h-64 w-64 lg:h-96 lg:w-96 flex items-center justify-center border rounded-2xl flex-col">
                        <img class="w-44 p-4" src="../assets/Icons/accident.png" alt="">
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

    <div id="successMessage" role="alert" class="alert alert-success fixed top-3 right-3 w-full max-w-xs md:max-w-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span id="messggio"></span>
    </div>








</body>

<script>
    $(document).ready(function () {

        $("#successMessage").hide();
        if (sessionStorage.getItem("messaggioSinistro")) {
            //alert("true");
            sessionStorage.removeItem("messaggioSinistro");
            $("#messggio").text("Sinistro registrato correttamente");
            $("#successMessage").slideDown();
            setTimeout(function () {
                $("#successMessage").slideUp();
            }, 2000)
        }

        if (sessionStorage.getItem("messaggioMulta")) {
            sessionStorage.removeItem("messaggioMulta");
            $("#messggio").text("Multa Inserita correttamente");
            $("#successMessage").slideDown();
            setTimeout(function () {
                $("#successMessage").slideUp();
            }, 2000)
        }

        $(document).on("click", "#btn-log-out", function () {

            $.ajax({
                url: "../PHPs/log-out.php",
                cache: false,
                dataType: "json",
                success: function (rtn) {
                    if (rtn == true) {
                        //alert("Logged-out");
                        location.reload();

                    } else {
                        alert("Errore: " + rtn);
                    }

                }
            });

        });

    });

</script>

</html>