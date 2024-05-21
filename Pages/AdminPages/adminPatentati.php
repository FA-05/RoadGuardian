<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../../Scripts/adminPatentatiScript.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../Style/generalStyle.css">
    <title>Admin</title>
</head>

<?PHP
    session_start();

    if($_SESSION["logged-in"]== true && $_SESSION["tipo"] == "admin"){
        
    }else{
        header("Location: ../../home.php");
    }

?>

<body>

    <div class="mx-4">

        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 ">
            <div class="navbar-start">
                <img class="ml-4 h-14 w-14" src="../../icons/logo.png" alt="">
                <a href="vigileHome.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>
            </div>
            <div class="navbar-center">
                <h1 class="text-center font-bold text-2xl p-4">Admin</h1>
            </div>
            <div class="navbar-end">
                <a id="btn-log-out" class="btn">Log-out</a>
            </div>
        </div>

        <div class="flex justify-center items-center mt-7">
        <div role="tablist" class="tabs tabs-boxed w-[400px]">
            <a href="adminHome.php" role="tab" class="tab ">Multe</a>
            <a href="adminSinistri.php" role="tab" class="tab ">Sinistri</a>
            <a href="adminPatentati.php" role="tab" class="tab tab-active">Patentati</a>
            <a href="adminVeicoli.php" role="tab" class="tab">Veicoli</a>

        </div>
        </div>
        



        <table id="Table" class="table mt-12">
            <tr>
                <th>CF</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Numero Patente</th>
                <th>Punti Patente</th>
                <th>Indirizzo</th>
                <th>email</th>
                <th>Patente Ritirata</th>
            </tr>

        </table>


    </div>



</body>

</html>