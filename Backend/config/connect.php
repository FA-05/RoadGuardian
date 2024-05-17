<?PHP

    $server="localhost:3308";
    $username="root";
    $password="";
    $dbname="infodb";

    $conn= new Mysqli($server,$username,$password,$dbname);


    if($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    session_start();


?>