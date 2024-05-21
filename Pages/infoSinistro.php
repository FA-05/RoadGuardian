<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoMulta</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="mx-4 sm:mx-16">
        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 flex justify-center items-center gap-1">

            <img class="ml-4 h-14 w-14" src="../assets/Icons/logo.png" alt="">
            <a href="../index.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>

        </div>
    </div>


    <div class=" p-2 flex items-center justify-center mt-10 flex-col gap-5 mb-28">



        <div class="bg-gray-100 p-8 rounded-[25px] shadow-lg w-[35rem] flex flex-col gap-1">
            <h1 class="text-black text-3xl font-bold uppercase mb-6 text-center">Sinistro</h1>

            <div class="flex justify-between items-center py-2 mb-3">
                <p class="font-bold">barcode</p>
                <p id="barcode"></p>
            </div>



            <div class="flex justify-between items-center py-2 mb-3 ">
                <p class="font-bold">Luogo</p>
                <p id="luogo"></p>
            </div>

            <div class="flex justify-between items-center py-2 mb-3">
                <p class="font-bold">Data e Ora</p>
                <p id="data_ora"></p>
            </div>

            <div class="flex justify-between items-center py-2 mb-3">
                <p class="font-bold">Causa Incidente</p>
                <p id="causaIncidente"></p>
            </div>

            <div class="flex justify-between items-center py-2 mb-3">
                <p class="font-bold">Numero di morti</p>
                <p id="numeroMorti"></p>
            </div>

            <div class="flex justify-between items-center py-2 mb-3">
                <p class="font-bold">Numero di feriti</p>
                <p id="numeroFeriti"></p>
            </div>


        </div>

        <div class=" w-[35rem] grid gap-5 grid-cols-2">

            <div id="targa" class="bg-gray-100 p-8 rounded-[25px] shadow-lg">
                <p class="font-bold ">Targa Veicoli coinvolti</p>
            </div>

            <div id="cfGuidatori" class="bg-gray-100 p-8 rounded-[25px] shadow-lg">
                <p class="font-bold">Codice fiscale guidatori</p>

            </div>
        </div>
    </div>


    <?PHP

    include ("footer.php")

        ?>


</body>

<script>
    $(document).ready(function () {


        var data = JSON.parse(sessionStorage.getItem("data"));

        //alert(data);

        $("#barcode").text(data["barcode"]);
        getTarghe(JSON.parse(data["targa"]));
        getCF(JSON.parse(data["CFguidatori"]));

        $("#luogo").text(data["luogo"]);
        $("#data_ora").text(data["data_ora"]);
        $("#causaIncidente").text(data["causaIncidente"]);
        $("#numeroMorti").text(data["numeroMorti"]);
        $("#numeroFeriti").text(data["numeroFeriti"]);
        //$("#causaIncidente").text(data["causaIncidente"]);

        function getCF(cf_list) {
            let rtn = "";

            cf_list.forEach(cf => {
                rtn += "<p>" + cf + "</p>";
            });

            $("#cfGuidatori").append(rtn);
        }

        function getTarghe(targa_list) {
            let rtn = "";

            targa_list.forEach(targa => {
                rtn += "<p>" + targa + "</p>";
            });

            $("#targa").append(rtn);
        }


    });
</script>

</html>