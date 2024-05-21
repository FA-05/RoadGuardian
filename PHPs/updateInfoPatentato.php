<?PHP

    include("config/connect.php");

    
    if(!empty($_POST["dati"]) && !empty($_POST["cf_list"]) ){
        $data=json_decode($_POST["dati"],true);
        $cf_list=json_decode($_POST["cf_list"],true);
        $punti= [];


        foreach ($cf_list as $patentato){
            $stmt= $conn->prepare("SELECT puntiPatente FROM patentati WHERE CF=?");
            //file_put_contents("debug.txt", json_encode($data[]));
            $stmt->bind_param("s",$patentato);

            if(($stmt -> execute())){
                $result= $stmt -> get_result();
                $row= $result->fetch_assoc();
                $punti[$patentato] = $row['puntiPatente'];

            }else {
                echo false;
                exit;
            }
            $stmt->close();
        }

        

        foreach ($cf_list as $patentato){
            $stmt= $conn -> prepare("UPDATE patentati SET puntiPatente=? , patenteRitirata=? WHERE CF=?");
            //file_put_contents("debug.txt", json_encode($data[]));
            $nuovi_punti = $punti[$patentato] - $data[$patentato][0];
            $patente_ritirata = $data[$patentato][1];
            $stmt->bind_param("iis", $nuovi_punti, $patente_ritirata, $patentato);


            if(!($stmt -> execute())){
                echo false;
                exit;
            }
            $stmt->close();
        }

        echo true;

    }else{
        echo false;
    }



?>