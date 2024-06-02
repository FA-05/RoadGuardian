<?php
// Connessione al database (modifica le credenziali se necessario)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infodb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Visualizzazione dei dati inviati dal client
echo "Dati ricevuti dal client:\n";
var_dump($_POST);

// Ottieni i dati inviati dal client
$CF = $_POST['CF'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$numeroPatente = $_POST['numeroPatente'];
$puntiPatente = $_POST['puntiPatente'];
$indirizzo = $_POST['indirizzo'];
$email = $_POST['email'];
$patenteRitirata = $_POST['patenteRitirata'];


// Query per aggiornare l'utente nel database
$sql = "UPDATE patentati SET nome='$nome', cognome='$cognome', numeroPatente='$numeroPatente', puntiPatente='$puntiPatente', indirizzo='$indirizzo', email='$email', patenteRitirata='$patenteRitirata' WHERE CF='$CF'";

if ($conn->query($sql) === TRUE) {
    echo "Utente aggiornato con successo";
} else {
    echo "Errore durante l'aggiornamento dell'utente: " . $conn->error;
}

// Chiudi la connessione
$conn->close();
?>