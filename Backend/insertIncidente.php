<?PHP 

    include("config/connect.php");

    $idVigile=$_SESSION["idVigile"];
    $barcode=$_POST["barcode"];
    $targa=$_POST["targa_guidatori"];
    $CFguidatori=$_POST["codF_guidatori"];
    $luogo=$_POST["luogo"];
    $causaIncidente=$_POST["causaIncidente"];
    $numeroMorti=$_POST["numeroMorti"];
    $numeroFeriti=$_POST["numeroFeriti"];
    $_SESSION["CFguidatori"]=$CFguidatori;

    $stmt= $conn -> prepare("INSERT INTO sinistri (barcode, targa,luogo,numeroFeriti,numeroMorti,causaIncidente,CFguidatori,idVigile) VALUES (?,?,?,?,?,?,?,?)");
    $stmt -> bind_param("sssiissi", $barcode, $targa, $luogo,$numeroMorti, $numeroFeriti, $causaIncidente, $CFguidatori, $idVigile);

    if($stmt -> execute()){
        echo true;
    }else{
        echo false;
    }

?>