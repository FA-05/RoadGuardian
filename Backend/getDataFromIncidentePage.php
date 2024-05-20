<?PHP 
    session_start();

    $CFguidatori=$_SESSION["CFguidatori"];
    $barcode=$_SESSION["barcode"];

    $rtn=["CFguidatori" => $CFguidatori , "barcode" => $barcode];

    

    echo json_encode($rtn);

?> 