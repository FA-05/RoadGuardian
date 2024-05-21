<?PHP


include("config/connect.php");

    $cf = $_POST["cf"];
    $like_cf = '%' . $cf . '%'; // Create the wildcard search pattern

    if ($stmt = $conn->prepare("SELECT CFproprietario FROM veicoli WHERE CFproprietario LIKE ? LIMIT 2")) {
        $stmt->bind_param("s", $like_cf); // Bind the wildcard search pattern

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $list_cf = [];
            while ($row = $result->fetch_assoc()) {
                $list_cf[] = $row["CFproprietario"];
            }

            $stmt->close();
            $conn->close();

            echo json_encode($list_cf);
        } else {
            echo json_encode(["error" => "Failed to execute statement"]);
        }
    } else {
        echo json_encode(["error" => "Failed to prepare statement"]);
    }

?>