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
$targa = $_POST['targa'];
$modelloAuto = $_POST['modelloAuto'];
$marca = $_POST['marca'];
$CFProprietario = $_POST['CFProprietario'];

// Query per aggiornare l'utente nel database
$sql = "UPDATE veicoli SET modelloAuto='$modelloAuto', marca='$marca', CFProprietario='$CFProprietario' WHERE targa='$targa'";

if ($conn->query($sql) === TRUE) {
    echo "Utente aggiornato con successo";
} else {
    echo "Errore durante l'aggiornamento dell'utente: " . $conn->error;
}

// Chiudi la connessione
$conn->close();
?>