<?PHP

    include("config/connect.php");

    $idVigile=$_SESSION["idVigile"];

    $barcode=$_POST["barcode"];
    $targaVeicolo=$_POST["targaVeicolo"];
    $luogo=$_POST["luogo"];
    $causaMulta=$_POST["causaMulta"];
    $importo=$_POST["importo"];

    $Date= new DateTime();
    $Date -> add(new DateInterval("P10D"));
    $scadenzaImporto= $Date -> format("Y-m-d");


    $stmt= $conn -> prepare("INSERT INTO multe (barcode, targaVeicolo, luogo, causaMulta,importo,scadenzaImporto,idVigile) VALUES (?,?,?,?,?,?,?)");
    $stmt ->bind_param ("ssssisi", $barcode,$targaVeicolo, $luogo, $causaMulta, $importo, $scadenzaImporto, $idVigile);
    $stmt -> execute();

    if($stmt -> error){
        echo "Errore durante l'inserimento della multa ".  $stmt->error;
    }

    echo true;

?>