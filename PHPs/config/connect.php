<?PHP

    $server="localhost:3306";
    $username="root";
    $password="";
    $dbname="infodb";

    $conn= new Mysqli($server,$username,$password,$dbname);


    if($conn -> connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    session_start();


?>