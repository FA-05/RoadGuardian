<?PHP 

    include ("config/connect.php");

    $CF=$_POST["codFiscale"];

    $stmt= $conn -> prepare("SELECT * FROM patentati WHERE CF=?");
    $stmt -> bind_param("s",$CF);

    if($stmt -> execute()){
        $result = $stmt -> get_result();
        $data = $result->fetch_assoc();


        echo json_encode($data);
    }else{ 
        echo json_encode(array('error' => 'query failed'));
    }



?>