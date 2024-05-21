<?PHP

    include("config/connect.php");
    
    $barcode=$_POST["barcode"];

    $stmt= $conn->prepare("SELECT barcode FROM multe where barcode=?");
    $stmt -> bind_param("s", $barcode);
    $stmt -> execute();

    $result= $stmt -> get_result();

    if($result -> num_rows > 0 ){
        echo true;
    }else{
        echo false;
    }


?>