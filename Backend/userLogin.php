<?PHP

include("config/connect.php");

$username = $_POST["username"];
$password = $_POST["password"];

// Prepare statement to get the salt and hashed password for the given username
$stmt = $conn->prepare("SELECT idVigile, tipo, password, salt FROM utenti WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $stored_hash = $row['password'];
    $salt = $row['salt'];

    // Hash the entered password with the salt
    $hashed_password = hash('sha256', $password . $salt);

    // Compare the hashed entered password with the stored hashed password
    if ($hashed_password == $stored_hash) {
        $_SESSION["logged-in"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["idVigile"] = $row["idVigile"];
        $_SESSION["tipo"] = $row["tipo"];
        echo json_encode(["login" => true, "tipo" => $_SESSION["tipo"]]);
    } else {
        echo json_encode(["login" => false]);
    }
} else {
    echo json_encode(["login" => false]);
}

?>
