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


if ($_SESSION["logged-in"] == true && $_SESSION["tipo"] == "admin") {

} else {
    if ($_SESSION["logged-in"] == true && $_SESSION["tipo"] == "vigile") {
        header("Location: ../formIncidente.php");
    } else {
        header("Location: ../../index.php");
    }
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
                <a href="adminPatentati.php" role="tab" class="tab tab-active">Patentati</a>
                <a href="adminVeicoli.php" role="tab" class="tab">Veicoli</a>
            </div>
        </div>

        <button class="main-btn" id="add" onclick="mostraInterfacciaAggiunta()">Nuovo Patentato</button>

        <input type="text" id="searchInput" placeholder="Cerca..."
            style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; width: 25%">

        <div class="actionButtonsContainer" style="position: relative;">
            <!-- Div per l'interfaccia di aggiunta dell'utente -->
            <div id="aggiuntaUtente" style="display: none;">
                <h2>Aggiungi Patentato</h2>
                <input type="text" id="CF" placeholder="CF" pattern="[A-Za-z]+" required>
                <input type="text" id="nome" placeholder="Nome" pattern="[A-Za-z]+" required>
                <input type="text" id="cognome" placeholder="Cognome" pattern="[A-Za-z]+" required>
                <input type="text" id="numeroPatente" placeholder="Numero Patente" minlength="10" maxlength="10"
                    required>
                <input type="text" id="puntiPatente" placeholder="Punti Patente"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                <input type="text" id="indirizzo" placeholder="Indirizzo" required>
                <input type="text" id="email" placeholder="Email" required>
                <select id="patenteRitirata" placeholder="Patente Ritirata" required>
                    <option value="" disabled>Seleziona</option>
                    <option value="1">Patente Ritirata</option>
                    <option value="0" selected>Patente non Ritirata</option>
                </select>
                <div class="button-container">
                    <button id="aggiungiUtente">Aggiungi</button>
                    <button onclick="nascondiInterfacciaAggiunta()">Annulla</button>
                </div>
            </div>

            <div id="modificaUtente" style="display: none;">
                <h2>Modifica Patentato</h2>
                <input type="text" id="CFModifica" placeholder="CF" pattern="[A-Za-z]+" required>
                <input type="text" id="nomeModifica" placeholder="Nome" pattern="[A-Za-z]+" required>
                <input type="text" id="cognomeModifica" placeholder="Cognome" pattern="[A-Za-z]+" required>
                <input type="text" id="numeroPatenteModifica" placeholder="Numero Patente" minlength="10" maxlength="10"
                    required>
                <input type="text" id="puntiPatenteModifica" placeholder="Punti Patente"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                <input type="text" id="indirizzoModifica" placeholder="Indirizzo" required>
                <input type="text" id="emailModifica" placeholder="Email" required>
                <select id="patenteRitirataModifica" placeholder="Patente Ritirata" required>
                    <option value="" disabled>Seleziona</option>
                    <option value="1">Patente Ritirata</option>
                    <option value="0" selected>Patente non Ritirata</option>
                </select>
                <div class="button-container">
                    <button id="salvaModifica">Modifica</button>
                    <button onclick="nascondiInterfacciaModifica()">Annulla</button>
                </div>
            </div>
            <div class="table-container">
            <table id="Table" class="table mt-12">
                <tr>
                    <th>Codice Fiscale</th>
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
                        loadData(rtn);
                    }
                }
            });
        }

        function loadData(data) {
            let $table = "";
            data.forEach(patentato => {
                $table += "<tr class='hover'>";
                $table += "<td>" + patentato["CF"] + "</td>";
                $table += "<td>" + patentato["nome"] + "</td>";
                $table += "<td>" + patentato["cognome"] + "</td>";
                $table += "<td>" + patentato["numeroPatente"] + "</td>";
                $table += "<td>" + patentato["puntiPatente"] + "</td>";
                $table += "<td>" + patentato["indirizzo"] + "</td>";
                $table += "<td>" + patentato["email"] + "</td>";
                $table += "<td>" + patentato["patenteRitirata"] + "</td>";
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
            var CF = $('#CF').val();
            var nome = $('#nome').val();
            var cognome = $('#cognome').val();
            var numeroPatente = $('#numeroPatente').val();
            var puntiPatente = $('#puntiPatente').val();
            var indirizzo = $('#indirizzo').val();
            var email = $('#email').val();
            var patenteRitirata = $('#patenteRitirata').val();

            $.ajax({
                url: '../../PHPs/add.php',
                method: 'POST',
                data: {
                    CF: CF,
                    nome: nome,
                    cognome: cognome,
                    numeroPatente: numeroPatente,
                    puntiPatente: puntiPatente,
                    indirizzo: indirizzo,
                    email: email,
                    patenteRitirata: patenteRitirata
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
            var CF = $('#CFModifica').val();
            var nome = $('#nomeModifica').val();
            var cognome = $('#cognomeModifica').val();
            var numeroPatente = $('#numeroPatenteModifica').val();
            var puntiPatente = $('#puntiPatenteModifica').val();
            var indirizzo = $('#indirizzoModifica').val();
            var email = $('#emailModifica').val();
            var patenteRitirata = $('#patenteRitirataModifica').val();



            $.ajax({
                url: '../../PHPs/edit.php',
                method: 'POST',
                data: {
                    CF: CF,
                    nome: nome,
                    cognome: cognome,
                    numeroPatente: numeroPatente,
                    puntiPatente: puntiPatente,
                    indirizzo: indirizzo,
                    email: email,
                    patenteRitirata: patenteRitirata
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
        var CF = rigaUtente.find('td:nth-child(1)').text();
        var nome = rigaUtente.find('td:nth-child(2)').text();
        var cognome = rigaUtente.find('td:nth-child(3)').text();
        var numeroPatente = rigaUtente.find('td:nth-child(4)').text();
        var puntiPatente = rigaUtente.find('td:nth-child(5)').text();
        var indirizzo = rigaUtente.find('td:nth-child(6)').text();
        var email = rigaUtente.find('td:nth-child(5)').text();
        var patenteRitirata = rigaUtente.find('td:nth-child(6)').text();
        $('#CFModifica').val(CF);
        $('#nomeModifica').val(nome);
        $('#cognomeModifica').val(cognome);
        $('#numeroPatenteModifica').val(numeroPatente);
        $('#puntiPatenteModifica').val(puntiPatente);
        $('#indirizzoModifica').val(indirizzo);
        $('#emailModifica').val(email);
        $('#patenteRitirataModifica').val(patenteRitirata);


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