<?PHP
    include ("config/connect.php");

    $stmt= $conn -> prepare("SELECT * FROM veicoli");

    if($stmt -> execute()){
        $result = $stmt -> get_result();
        $veicoli=[];
        while($row = $result -> fetch_assoc()){
            $veicoli[]=$row;
        }

        echo json_encode($veicoli);
    }else{
        echo json_encode(["error" => "Errore nell'esecuzione della query"]);
    } 
?>