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
function aggiungiUtente($conn, $CF, $nome, $cognome, $numeroPatente, $puntiPatente, $indirizzo, $email, $patenteRitirata)
{
    $stmt = $conn->prepare("INSERT INTO patentati (CF, nome, cognome, numeroPatente, puntiPatente, indirizzo, email, patenteRitirata) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisss", $CF, $nome, $cognome, $numeroPatente, $puntiPatente, $indirizzo, $email, $patenteRitirata);
    if ($stmt->execute()) {
        return true; // Successo
    } else {
        return false; // Errore
    }
}

// Se sono stati inviati dati POST, prova ad aggiungere un nuovo utente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ricevi i dati inviati dal frontend
    $CF = $_POST['CF'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $numeroPatente = $_POST['numeroPatente'];
    $puntiPatente = $_POST['puntiPatente'];
    $indirizzo = $_POST['indirizzo'];
    $email = $_POST['email'];
    $patenteRitirata = $_POST['patenteRitirata'];

    // Aggiungi l'utente al database
    if (aggiungiUtente($conn, $CF, $nome, $cognome, $numeroPatente, $puntiPatente, $indirizzo, $email, $patenteRitirata)) {
        echo "Dati inseriti con successo";
    } else {
        echo "Errore nell'inserimento dei dati";
    }
}

$conn->close();
?>
