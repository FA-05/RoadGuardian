<?php
    
include("config/connect.php");

$idVigile = $_SESSION["idVigile"];

$stmt = $conn->prepare("SELECT barcode FROM multe WHERE idVigile=? LIMIT 10");
$stmt->bind_param("i", $idVigile);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $Multe = [];
    while ($row = $result->fetch_assoc()) {
        $Multe[] = $row["barcode"]; 
    }
} else {
    echo json_encode(["error" => "Errore durante l'esecuzione"]); 
}

$stmt -> close();


$stmt = $conn->prepare("SELECT barcode FROM sinistri WHERE idVigile=? LIMIT 5");
$stmt->bind_param("i", $idVigile);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $Sinistri = [];
    while ($row = $result->fetch_assoc()) {
        $Sinistri[] = $row["barcode"];  
    }
} else {
    echo json_encode(["error" => "Errore durante l'esecuzione"]); 
}

$data=[];
$data["Multe"]=$Multe;
$data["Sinistri"]=$Sinistri;

echo json_encode($data)

?>
