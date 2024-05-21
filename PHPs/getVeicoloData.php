<?PHP
    include ("config/connect.php");

    $stmt= $conn -> prepare("SELECT * FROM veicoli");

    if($stmt -> execute()){
        $result = $stmt -> get_result();
        $Multe=[];
        while($row = $result -> fetch_assoc()){
            $Multe[]=$row;
        }

        echo json_encode($Multe);
    }else{
        echo json_encode(["error" => "Errore nell'esecuzione della query"]);
    } 
?>