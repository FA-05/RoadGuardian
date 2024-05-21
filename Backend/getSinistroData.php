<?PHP
    include ("config/connect.php");

    $stmt= $conn -> prepare("SELECT * FROM sinistri");

    if($stmt -> execute()){
        $result = $stmt -> get_result();
        $sinistro=[];
        while($row = $result -> fetch_assoc()){
            $sinistro[]=$row;
        }

        echo json_encode($sinistro);
    }else{
        echo json_encode(["error" => "Errore nell'esecuzione della query"]);
    } 
?>