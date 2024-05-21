<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin</title>
</head>

<?PHP
session_start();

if ($_SESSION["logged-in"] == true && $_SESSION["tipo"] == "admin") {

} else {
    header("Location: ../../index.php");
}

?>

<body class="bg-black-100 font-sans">

<nav>
     <?PHP
    include ("../navbarAdmin.php")
        ?>
        
</nav>

    <div class="mx-4">

        <div class="flex justify-center items-center mt-7">
            <div role="tablist" class="tabs tabs-boxed w-[400px]">
                <a href="adminSinistri.php" role="tab" class="tab ">Sinistri</a>
                <a href="adminPatentati.php" role="tab" class="tab tab-active">Patentati</a>
                <a href="adminVeicoli.php" role="tab" class="tab">Veicoli</a>

            </div>
        </div>




        <table id="Table" class="table mt-12">
            <tr>
                <th>CF</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Numero Patente</th>
                <th>Punti Patente</th>
                <th>Indirizzo</th>
                <th>email</th>
                <th>Patente Ritirata</th>
            </tr>

        </table>


    </div>



</body>

<script>

    $(document).ready(function () {


        getMultaData();


        function getMultaData() {

            $.ajax({
                url: "../../PHPs/getPatentatiData.php",
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



            data.forEach(patentato => {
                $table += "<tr class='hover'>";
                $table += "<td>" + patentato["CF"] + "</td>";
                $table += "<td>" + patentato["nome"] + "</td>";
                $table += "<td>" + patentato["cognome"] + "</td>";
                $table += "<td>" + patentato["nmeroPatente"] + "</td>";
                $table += "<td>" + patentato["puntiPatente"] + "</td>";
                $table += "<td>" + patentato["indirizzo"] + "</td>";
                $table += "<td>" + patentato["email"] + "</td>";
                $table += "<td>" + patentato["patenteRitirata"] + "</td>";


                $table += "</tr>";
            });

            $("#Table").append($table);
        }

        $(document).on("click", "#btn-log-out", function () {

            $.ajax({
                url: "../../PHPs/logout.php",
                cache: false,
                dataType: "json",
                success: function (rtn) {
                    if (rtn == true) {
                        alert("Logged-out");
                        window.location.href = "../../index.php";

                    } else {
                        alert("Errore: " + rtn);
                    }

                }
            });

        });

    });
</script>

</html>