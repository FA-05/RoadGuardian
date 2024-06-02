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

<body>

    <nav>
        <?PHP
        include ("../navbarAdmin.php")
            ?>

    </nav>
    <div class="mx-4">
        <div class="flex justify-center items-center mt-7">
            <div role="tablist" class="tabs tabs-boxed w-[400px]">
                <a href="adminSinistri.php" role="tab" class="tab tab-active ">Sinistri</a>
                <a href="adminPatentati.php" role="tab" class="tab">Patentati</a>
                <a href="adminVeicoli.php" role="tab" class="tab">Veicoli</a>
            </div>
        </div>

        <input type="text" id="searchInput" placeholder="Cerca..."
            style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; width: 25%">

        <table id="Table" class="table mt-12">
            <tr>
                <th>Barcode</th>
                <th>Targa Veicoli</th>
                <th>CF Guidatori</th>
                <th>data-ora</th>
                <th>luogo</th>
                <th>Causa Incidente</th>
                <th>Feriti</th>
                <th>Morti</th>


            </tr>

        </table>


    </div>



</body>


<script>

    $(document).ready(function () {


        getMultaData();


        function getMultaData() {

            $.ajax({
                url: "../../PHPs/getSinistroData.php",
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



            data.forEach(sinistro => {
                $table += "<tr class='hover'>";
                $table += "<td>" + sinistro["barcode"] + "</td>";
                $table += "<td>" + sinistro["targa"] + "</td>";
                $table += "<td>" + sinistro["CFguidatori"] + "</td>";
                $table += "<td>" + sinistro["data_ora"] + "</td>";
                $table += "<td>" + sinistro["luogo"] + "</td>";
                $table += "<td>" + sinistro["causaIncidente"] + "</td>";
                $table += "<td>" + sinistro["numeroFeriti"] + "</td>";
                $table += "<td>" + sinistro["numeroMorti"] + "</td>";


                $table += "</tr>";
            });

            $("#Table").append($table);
        }

        document.getElementById('searchInput').addEventListener('keyup', function () {
            var input = this.value.toLowerCase(); // Ottieni il testo di ricerca in minuscolo
            var rows = document.querySelectorAll("#Table tr"); // Ottieni tutte le righe della tabella

            // Itera su ogni riga della tabella
            rows.forEach(function (row) {
                var cells = row.getElementsByTagName("td"); // Ottieni le celle della riga

                // Controlla se una delle celle contiene il testo di ricerca
                var found = false;
                for (var i = 0; i < cells.length; i++) {
                    var cell = cells[i];
                    if (cell.textContent.toLowerCase().indexOf(input) > -1) {
                        found = true;
                        break;
                    }
                }

                // Mostra o nascondi la riga in base al risultato della ricerca
                if (found) {
                    row.style.display = ""; // Mostra la riga
                } else {
                    row.style.display = "none"; // Nascondi la riga
                }
            });
        });



    });
</script>
<script>
    window.__PUBLIC_PATH__ = '../../assets/bootstrap-italia/dist/fonts';
</script>
<script src="../../assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
<script src="../../assets/script/store.js"></script>

</html>