<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin</title>
</head>

<?PHP
session_start();

if ($_SESSION["logged-in"] == true && $_SESSION["tipo"] == "admin") {

} else {
    header("Location: ../../index.php");
}

?>

<body>

<nav>
     <?PHP
    include ("../navbarAdmin.php")
        ?>
        
</nav>

        <div class="flex justify-center items-center mt-7">
            <div role="tablist" class="tabs tabs-boxed w-[400px]">
                <a href="adminSinistri.php" role="tab" class="tab tab-active ">Sinistri</a>
                <a href="adminPatentati.php" role="tab" class="tab">Patentati</a>
                <a href="adminVeicoli.php" role="tab" class="tab">Veicoli</a>

            </div>
        </div>



        <table id="Table" class="table mt-12">
            <tr>
                <th>Barcode</th>
                <th>Targa Veicoli</th>
                <th>CF Guidatori</th>
                <th>data-ora</th>
                <th>luogo</th>
                <th>Causa Incidente</th>
                <th>Feriti</th>
                <th>Morti</th>


            </tr>

        </table>


    </div>



</body>


<script>

    $(document).ready(function () {


        getMultaData();


        function getMultaData() {

            $.ajax({
                url: "../../PHPs/getSinistroData.php",
                cache: false,
                dataType: "json",
                success: function (rtn) {
                    if (rtn.error) {
                        alert("Errore nel fetch dei dati: " + rtn.error);
                    } else {
                        //alert(JSON.stringify(rtn));
                        loadData(rtn);
                    }
                }

            });

        }

        function loadData(data) {
            //alert(data);
            $table = "";



            data.forEach(sinistro => {
                $table += "<tr class='hover'>";
                $table += "<td>" + sinistro["barcode"] + "</td>";
                $table += "<td>" + sinistro["targa"] + "</td>";
                $table += "<td>" + sinistro["CFguidatori"] + "</td>";
                $table += "<td>" + sinistro["data_ora"] + "</td>";
                $table += "<td>" + sinistro["luogo"] + "</td>";
                $table += "<td>" + sinistro["causaIncidente"] + "</td>";
                $table += "<td>" + sinistro["numeroFeriti"] + "</td>";
                $table += "<td>" + sinistro["numeroMorti"] + "</td>";


                $table += "</tr>";
            });

            $("#Table").append($table);
        }


      
    });
</script>
<script>
    window.__PUBLIC_PATH__ = '../../assets/bootstrap-italia/dist/fonts';
  </script>
  <script src="../../assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
  <script src="../../assets/script/scripts.js"></script>
  <script src="../../assets/script/store.js"></script>
  <script src="../../assets/script/pages/privacy.js"></script>

</html>