<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infodb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Funzione per l'aggiunta di un nuovo utente
function aggiungiUtente($conn, $targa, $modelloAuto, $marca, $CFProprietario)
{
    $stmt = $conn->prepare("INSERT INTO veicoli (targa, modelloAuto, marca, CFProprietario) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $targa, $modelloAuto, $marca, $CFProprietario);
    if ($stmt->execute()) {
        return true; // Successo
    } else {
        return false; // Errore
    }
}

// Se sono stati inviati dati POST, prova ad aggiungere un nuovo utente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ricevi i dati inviati dal frontend
    $targa = $_POST['targa'];
    $modelloAuto = $_POST['modelloAuto'];
    $marca = $_POST['marca'];
    $CFProprietario = $_POST['CFProprietario'];
    // Aggiungi l'utente al database
    if (aggiungiUtente($conn, $targa, $modelloAuto, $marca, $CFProprietario)) {
        echo "Dati inseriti con successo";
    } else {
        echo "Errore nell'inserimento dei dati";
    }
}

$conn->close();
?>
