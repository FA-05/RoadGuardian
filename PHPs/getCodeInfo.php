<?PHP

    include("config/connect.php");
    


    // Controllo se il codice è stato inviato tramite POST
    if (isset($_POST["code"])) {
        $code = $_POST["code"];



        // Preparazione della query SQL per prevenire SQL Injection
        $stmt = $conn->prepare("SELECT * FROM multe WHERE barcode = ?");
        $stmt->bind_param("s", $code);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Invio dei dati trovati al client come JSON
            $row["dati"] = $result->fetch_assoc();
            $row["tipo"]= "multa";
            echo json_encode($row);
        } else {
            // Invio di una risposta di errore come JSON
            // Preparazione della query SQL per prevenire SQL Injection
            $stmt -> close();

            $stmt = $conn->prepare("SELECT * FROM sinistri WHERE barcode = ?");
            $stmt->bind_param("s", $code);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Invio dei dati trovati al client come JSON
                $row["dati"] = $result->fetch_assoc();
                $row["tipo"]= "sinistro";

                echo json_encode($row);

            }else{
                echo json_encode(["error" => "barcode non valido"]);

            }
            $stmt -> close();
        }
    } else {
        // Invio di un errore nel caso in cui il codice non sia presente nella richiesta POST
        echo json_encode(["error" => "Nessun codice fornito"]);
    }
?>