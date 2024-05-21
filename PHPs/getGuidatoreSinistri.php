<?PHP 

    include ("config/connect.php");


    $stmt= $conn ->prepare("SELECT barcode, CFguidatori FROM sinistri");

    

    if($stmt -> execute()){
        $result = $stmt -> get_result();
        $data = array();
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        echo json_encode($data);
       
    }else{ 
        echo json_encode(array('error' => 'query failed'));
    }



?>