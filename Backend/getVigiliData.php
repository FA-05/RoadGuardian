<?PHP
    include ("config/connect.php");

    $stmt= $conn -> prepare("SELECT idVigile, nome, cognome, email, telefono, indirizzo FROM utenti WHERE tipo='vigile' ");

    if($stmt -> execute()){
        $result = $stmt -> get_result();
        $vigili=[];
        while($row = $result -> fetch_assoc()){
            $vigili[]=$row;
        }

        echo json_encode($vigili);
    }else{
        echo json_encode(["error" => "Errore nell'esecuzione della query"]);
    } 
?>