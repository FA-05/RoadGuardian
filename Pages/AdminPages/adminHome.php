<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin</title>
</head>

<?PHP
session_start();

if (!($_SESSION["logged-in"] == true && $_SESSION["tipo"] == "admin")) {
    header("Location: ../../index.php");
}

?>

<body>

    <div class="mx-4">

        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 ">
            <div class="navbar-start">
                <img class="ml-4 h-14 w-14" src="../../assets/Icons/logo.png" alt="">
                <a href="vigileHome.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>
            </div>
            <div class="navbar-center">
                <h1 class="text-center font-bold text-2xl p-4">Admin</h1>
            </div>
            <div class="navbar-end">
                <a id="btn-log-out" class="btn">Log-out</a>
            </div>
        </div>

        <div class="flex justify-center items-center mt-7">
            <div role="tablist" class="tabs tabs-boxed w-[400px]">
                <a href="adminHome.php" role="tab" class="tab tab-active">Multe</a>
                <a href="adminSinistri.php" role="tab" class="tab ">Sinistri</a>
                <a href="adminPatentati.php" role="tab" class="tab">Patentati</a>
                <a href="adminVeicoli.php" role="tab" class="tab">Veicoli</a>

            </div>
        </div>


        <table id="Table" class="table mt-12">
            <tr>
                <th>Barcode</th>
                <th>Targa Veicolo</th>
                <th>Luogo</th>
                <th>Causa Multa</th>
                <th>data-ora</th>
                <th>Importo</th>
                <th>Scadenza Importo</th>
                <th>Pagata</th>
                <th>Vigile</th>
            </tr>

        </table>


    </div>



</body>

<script>

    $(document).ready(function () {


        getMultaData();


        function getMultaData() {

            $.ajax({
                url: "../../PHPs/getMultaData.php",
                cache: false,
                dataType: "json",
                success: function (rtn) {
                    if (rtn.error) {
                        alert("Errore nel fetch dei dati: " + rtn.error);
                    } else {
                        //alert(JSON.stringify(rtn));
                        loadData(rtn);
                    }
                }

            });

        }

        function loadData(data) {
            //alert(data);
            $table = "";

            data.forEach(multa => {
                $table += "<tr class='hover'>";
                $table += "<td>" + multa["barcode"] + "</td>";
                $table += "<td>" + multa["targaVeicolo"] + "</td>";
                $table += "<td>" + multa["luogo"] + "</td>";
                $table += "<td>" + multa["causaMulta"] + "</td>";
                $table += "<td>" + multa["data_ora"] + "</td>";
                $table += "<td>" + multa["importo"] + "</td>";
                $table += "<td>" + multa["scadenzaImporto"] + "</td>";
                $table += "<td>" + multa["pagata"] + "</td>";
                $table += "<td>" + multa["idVigile"] + "</td>";
                $table += "</tr>";
            });

            $("#Table").append($table);
        }


        $(document).on("click", "#btn-log-out", function () {

            $.ajax({
                url: "../../PHPs/log-out.php",
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