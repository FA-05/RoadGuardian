<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../../assets/css/styleadmin.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />

    <title>Admin</title>
</head>

<?PHP
session_start();

if (!($_SESSION["logged-in"] == true && $_SESSION["tipo"] == "admin")) {
    header("Location: ../../index.php");
}

?>

<body>

    <header>
        <?PHP
        include ("../navbarAdmin.php")
            ?>

    </header>

    <div class="mx-4">
        <div class="flex justify-center items-center mt-7">
            <div role="tablist" class="tabs tabs-boxed w-[400px]">
                <a href="adminSinistri.php" role="tab" class="tab ">Sinistri</a>
                <a href="adminPatentati.php" role="tab" class="tab">Patentati</a>
                <a href="adminVeicoli.php" role="tab" class="tab tab-active">Veicoli</a>
            </div>
        </div>
   

    <button class="main-btn" id="add" onclick="mostraInterfacciaAggiunta()">Nuovo Veicolo</button>

    <input type="text" id="searchInput" placeholder="Cerca..."
            style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; width: 25%">

    <div class="actionButtonsContainer" style="position: relative;">
        <!-- Div per l'interfaccia di aggiunta dell'utente -->
        <div id="aggiuntaUtente" style="display: none;">
            <h2>Aggiungi Utente</h2>
            <input type="text" id="targa" placeholder="Targa" pattern="[A-Za-z]+" required>
            <input type="text" id="modelloAuto" placeholder="Modello" pattern="[A-Za-z]+" required>
            <input type="text" id="marca" placeholder="Marca" pattern="[A-Za-z]+" required>
            <input type="text" id="CFProprietario" placeholder="Codice Fiscale" minlength="10" maxlength="16" required>
            <div class="button-container">
                <button id="aggiungiUtente">Aggiungi</button>
                <button onclick="nascondiInterfacciaAggiunta()">Annulla</button>
            </div>
        </div>

        <!-- Div per l'interfaccia di aggiunta dell'utente -->
        <div id="modificaUtente" style="display: none;">
            <h2>Modifica Utente</h2>
            <input type="text" id="targaModifica" placeholder="Targa" pattern="[A-Za-z]+" required>
            <input type="text" id="modelloModifica" placeholder="Modello" pattern="[A-Za-z]+" required>
            <input type="text" id="marcaModifica" placeholder="Marca" pattern="[A-Za-z]+" required>
            <input type="text" id="CFProprietarioModifica" placeholder="Codice Fiscale" minlength="10" maxlength="16"
                required>
            <div class="button-container">
                <button id="salvaModifica">Modifica</button>
                <button onclick="nascondiInterfacciaModifica()">Annulla</button>
            </div>
        </div>



        <table id="Table" class="table mt-12">
            <tr>
                <th>Targa</th>
                <th>Modello</th>
                <th>Marca</th>
                <th>CF Proprietario</th>
            </tr>
        </table>


    </div>



</body>

<script>

    $(document).ready(function () {


        getMultaData();


        function getMultaData() {

            $.ajax({
                url: "../../PHPs/getVeicoloData.php",
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
            let $table = "";
            data.forEach(veicolo => {
                $table += "<tr class='hover'>";
                $table += "<td>" + veicolo["targa"] + "</td>";
                $table += "<td>" + veicolo["modelloAuto"] + "</td>";
                $table += "<td>" + veicolo["marca"] + "</td>";
                $table += "<td>" + veicolo["CFproprietario"] + "</td>";
                $table += "<td><button onclick='mostraInterfacciaModifica(this)'>Modifica</button></td>";
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

        $('#aggiungiUtente').click(function () {
            var targa = $('#targa').val();
            var modelloAuto = $('#modelloAuto').val();
            var marca = $('#marca').val();
            var CFProprietario = $('#CFProprietario').val();
            $.ajax({
                url: '../../PHPs/addcar.php',
                method: 'POST',
                data: {
                    targa: targa,
                    modelloAuto: modelloAuto,
                    marca: marca,
                    CFProprietario: CFProprietario,
                },
                success: function (response) {
                    console.log(response);
                    location.reload();
                    alert("Utente aggiunto con successo");
                    $('#aggiuntaUtente input').val('');
                    nascondiInterfacciaAggiunta();
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });

        $('#salvaModifica').click(function () {
            var targa = $('#targaModifica').val();
            var modelloAuto = $('#modelloModifica').val();
            var marca = $('#marcaModifica').val();
            var CFProprietario = $('#CFProprietarioModifica').val();

            $.ajax({
                url: '../../PHPs/editcar.php',
                method: 'POST',
                data: {
                    targa: targa,
                    modelloAuto: modelloAuto,
                    marca: marca,
                    CFProprietario: CFProprietario,
                },
                success: function (response) {
                    console.log(response);
                    location.reload();
                    $('#modificaUtente').hide();
                    alert("Utente modificato con successo");
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });

    });

    function mostraInterfacciaModifica(button) {
        var rigaUtente = $(button).closest('tr');
        var targa = rigaUtente.find('td:nth-child(1)').text();
        var modelloAuto = rigaUtente.find('td:nth-child(2)').text();
        var marca = rigaUtente.find('td:nth-child(3)').text();
        var CFProprietario = rigaUtente.find('td:nth-child(4)').text();
        $('#targaModifica').val(targa);
        $('#modelloModifica').val(modelloAuto);
        $('#marcaModifica').val(marca);
        $('#CFProprietarioModifica').val(CFProprietario);

        $('#modificaUtente').show();
    }



    function nascondiInterfacciaModifica() {
        $('#modificaUtente').slideUp();
    }

    function mostraInterfacciaAggiunta() {
        $('#aggiuntaUtente').slideDown();
    }

    function nascondiInterfacciaAggiunta() {
        $('#aggiuntaUtente').slideUp();
    }
</script>
<script>
    window.__PUBLIC_PATH__ = '../../assets/bootstrap-italia/dist/fonts';
</script>
<script src="../../assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
<script src="../../assets/script/store.js"></script>
</html>