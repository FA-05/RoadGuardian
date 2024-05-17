<?php


include("config/connect.php");

    $targa = $_POST["targa"];
    $like_targa = '%' . $targa . '%'; // Create the wildcard search pattern

    if ($stmt = $conn->prepare("SELECT targa FROM veicoli WHERE targa LIKE ? LIMIT 3")) {
        $stmt->bind_param("s", $like_targa); // Bind the wildcard search pattern

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $targhe = [];
            while ($row = $result->fetch_assoc()) {
                $targhe[] = $row["targa"];
            }

            $stmt->close();
            $conn->close();

            echo json_encode($targhe);
        } else {
            echo json_encode(["error" => "Failed to execute statement"]);
        }
    } else {
        echo json_encode(["error" => "Failed to prepare statement"]);
    }

?>