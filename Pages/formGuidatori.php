<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Driver Information</title>
</head>

<?PHP
session_start();
if ($_SESSION["logged-in"] == false) {
    header("Location: ../index.php");
}


?>


<body>

    <div class="mx-4 sm:mx-16 mb-4">
        <div class="navbar bg-base-100 rounded-lg mt-4 bg-amber-300 flex justify-center items-center gap-1">

            <img class="ml-4 h-14 w-14" src="../assets/Icons/logo.png" alt="">
            <a href="vigileHome.php" class="hidden sm:inline text-xl font-bold">Road Guardian</a>

        </div>
    </div>


    <div class="flex flex-col items-center justify-center mt-20 h-120">
        <div class="relative bg-gray-100 rounded-lg shadow-xl w-full max-w-4xl p-10 mb-4">
            <button id="ritira-btn" type="button"
                class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition duration-300 ease-in-out">Ritira
                Patente</button>
            <p id="nomeCognome" class="font-bold text-3xl mb-4 text-center"></p>

            <div class="grid grid-cols-3 gap-6">
                <div>
                    <div class="grid grid-cols-2 items-center mb-4 w-max">
                        <p class="font-semibold text-lg mr-2">Numero Patente:</p>
                        <p id="numeroPatente"></p>
                    </div>

                    <div class="grid grid-cols-2 items-center mb-4">
                        <p class="font-semibold text-lg">Punti Patente:</p>
                        <p id="puntiPatente"></p>
                    </div>

                    <div class="mb-6">
                        <label for="remove-points" class="font-semibold text-lg">Togli punti:</label>
                        <input value="0" id="remove-points" type="number" min="0" max="15"
                            class="input input-bordered w-full max-w-[6rem]">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="h-full w-0.5 bg-gray-300"></div>
                </div>

                <div>
                    <div id="sinistri" class="mb-4">
                        <p class="font-semibold text-lg mb-1">Sinistri Precedenti:</p>
                    </div>
                </div>
            </div>

            <div id="arrow-btn" class="flex justify-between items-center mt-6">
                <button id="before-btn" type="button"
                    class="btn bg-blue-500 text-white px-4 py-2 w-24  rounded-lg shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">←</button>
                <button id="next-btn" type="button"
                    class="btn bg-blue-500 text-white px-4 py-2 w-24 rounded-lg shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">→</button>
            </div>
        </div>

        <button id="salva-btn"
            class="btn bg-green-500 text-white w-[25%] py-3 rounded-lg shadow-md hover:bg-green-600 transition duration-300 ease-in-out">Salva</button>
    </div>

</body>

<script>
    $(document).ready(function () {

        var currentGuidatore = 0;
        var totGuidatori;
        var newData = {};
        var cf_list = new Array();
        var createnewData = false;
        var BARCODE = "";

        getData(currentGuidatore);

        function getData(currentGuidatore) {

            $.ajax({
                url: "../PHPs/getDataFromIncidentePage.php",
                cache: false,
                dataType: "json",
                success: function (data) {
                    if (!createnewData) {
                        //alert(data["barcode"]);
                        //alert(data["CFguidatori"]);
                        BARCODE = data["barcode"];
                        cf_list = JSON.parse(data["CFguidatori"]);
                        cf_list.forEach(cf => {
                            //alert(cf);
                            newData[cf] = new Array(0, true);
                        });

                    }

                    //alert(JSON.stringify(newData));
                    totGuidatori = cf_list.length - 1;
                    displayBTN();
                    //alert(cf_list[currentGuidatore]);
                    loadData(cf_list[currentGuidatore]);
                }
            })

        }

        function loadData(data) {
            let codFiscale = data;
            //alert("codice fiscale: " + codFiscale);

            $.ajax({
                url: "../PHPs/getGuidatoreData.php",
                method: "POST",
                data: { codFiscale: codFiscale },
                cache: false,
                dataType: "json",
                success: function (data) {
                    if (data.error) {
                        alert("Errore: " + data.error);
                    } else if (!data) {
                        alert("No data found");
                    } else {
                        //alert(JSON.stringify(data));


                        $("#nomeCognome").text(data["nome"] + " " + data["cognome"]);
                        $("#numeroPatente").text(data["numeroPatente"]);
                        $("#puntiPatente").text(data["puntiPatente"]);


                        loadSinistri(codFiscale);



                    }
                }
            });

        }


        function loadSinistri(codFiscale) {
            $.ajax({
                url: "../PHPs/getGuidatoreSinistri.php",
                method: "POST",
                data: { codFiscale: codFiscale },
                cache: false,
                dataType: "json",
                success: function (data) {

                    if (data.error) {
                        alert("Errore: " + data.error);
                    } else if (!data) {
                        alert("No data found");
                    } else {

                        let sinistriPrecedenti = "";
                        let sinistroExist = false;

                        // let codFiscali=JSON.parse(data["1"]["CFguidatori"]);
                        // alert(codFiscali[0]);



                        //alert(JSON.stringify(data));

                        data.forEach(element => {
                            let barcode = element["barcode"];
                            let array_cf = JSON.parse(element["CFguidatori"]);
                            // alert(barcode);
                            //alert(JSON.stringify(array_cf));

                            if (barcode != BARCODE) {
                                array_cf.forEach(cf => {
                                    if (cf == codFiscale) {
                                        sinistroExist = true;
                                        sinistriPrecedenti += "<p id='" + barcode + "' class='barcode'>" + barcode + "</p>"
                                    }

                                })
                            }
                        });




                        //alert(sinistriPrecedenti);
                        if (sinistroExist) {
                            $("#sinistri").append(sinistriPrecedenti);
                        } else {
                            $("#sinistri").append("<p class='barcode'>Nessun Sinistro precedente<p>");
                        }



                    }
                }
            });
        }

        $(document).on("click", "#next-btn", function () {
            if (saveData()) {
                currentGuidatore++;
                displayBTN();

                getData(currentGuidatore);
                $("#remove-points").val(newData[cf_list[currentGuidatore]][0]);


            }

        });

        $(document).on("click", "#before-btn", function () {
            if (saveData()) {
                currentGuidatore--;
                displayBTN();

                getData(currentGuidatore);
                $("#remove-points").val(newData[cf_list[currentGuidatore]][0]);
            }
        });

        function displayBTN() {

            $(".barcode").remove();
            checkPatente();
            if (currentGuidatore == 0) {
                $("#before-btn").hide();
                $("#arrow-btn").removeClass("justify-between");
                $("#arrow-btn").addClass("justify-end");
            } else {
                $("#before-btn").show()
                $("#arrow-btn").removeClass("justify-end");
                $("#arrow-btn").addClass("justify-between");

            }

            if (currentGuidatore == totGuidatori) {
                $("#next-btn").hide();
                $("#salva-btn").show();

            } else {
                $("#next-btn").show();
                $("#salva-btn").hide();
            }

        }


        function saveData() {

            let togliPunti = $("#remove-points").val();

            if (togliPunti > $("#remove-points").val()) {
                alert("Errore togliere un numero valido di punti");
                return false;
            } else {
                newData[cf_list[currentGuidatore]][0] = togliPunti;
                //alert(JSON.stringify(newData));
            }

            return true;

        }

        $(document).on("click", "#ritira-btn", function () {
            checkPatente();
        });

        function checkPatente() {
            if (createnewData) {
                if (newData[cf_list[currentGuidatore]][1] == true) {
                    $("#ritira-btn").text("PATENTE RITIRATA");
                    newData[cf_list[currentGuidatore]][1] = false;
                } else {
                    $("#ritira-btn").text("Ritira Patente");
                    newData[cf_list[currentGuidatore]][1] = true;

                }


            } else {
                createnewData = true;
            }

        }

        $(document).on("click", "#salva-btn", function () {

            if (saveData()) {
                checkPatente();
                //alert(JSON.stringify(newData));
                dati = JSON.stringify(newData);
                cf_list = JSON.stringify(cf_list)

                $.ajax({
                    url: "../PHPs/updateInfoPatentato.php",
                    method: "POST",
                    cache: "false",
                    data: { dati: dati, cf_list: cf_list },
                    success: function (rtn) {
                        if (rtn == true) {
                            sessionStorage.setItem("messaggioSinistro", "true");
                            window.location.replace("vigileHome.php");
                            //alert("Modifiche avvenute con successo :" +rtn)
                        } else {
                            alert("Errore durante la modifica: " + rtn);
                        }
                    }
                });
            }



        });

    }); 
</script>

</html>