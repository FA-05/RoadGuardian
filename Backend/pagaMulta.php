<?PHP 

    include("config/connect.php");

    $barcode=$_POST["barcode"];

    $stmt=$conn->prepare("UPDATE multe SET pagata=1 WHERE barcode =?");
    $stmt -> bind_param("s", $barcode, );
    if($stmt -> execute()){
        if($stmt -> affected_rows >0 ){
            echo true;
        }else{
            echo false;
        }
    }

    



?>