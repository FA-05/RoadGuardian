<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Informazioni Guidatore</title>
</head>

<?PHP
session_start();
if ($_SESSION["logged-in"] == false) {
    header("Location: ../index.php");
}


?>


<body>

    <header>
        <?php include ("../Pages/navbar.php"); ?>
    </header>
    <div class="container" id="main-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="cmp-breadcrumbs" role="navigation">
                    <nav class="breadcrumb-container">
                        <ol class="breadcrumb p-0" data-element="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item">
                                <span class="separator">/</span>
                                <a href="formIncidente.php">Inserimento Sinistro</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <span class="separator">/</span>Applicazione Penalità
                        </ol>
                    </nav>
                </div>
                <div class="cmp-heading pb-3 pb-lg-4">
                    <h1 class="title-xxxlarge">Applicazione Penalità</h1>
                    <p class="subtitle-small">
                        Hai bisogno di assistenza?
                        <a href="mailto:therealfossi@altervista.org" class="title-small-semi-bold t-primary">Contattaci</a>
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="cmp-info-progress d-flex" data-progress="">
                    <!-- Desktop -->
                    <div
                        class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end completed">
                        <div
                            class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                            <span class="d-block h-100 title-medium text-uppercase">Inserimento Sinistro</span>

                            <svg class="d-block icon icon-primary icon-sm" aria-hidden="true">
                            <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-check"></use>
                            </svg>
                        </div>
                    </div>
                    <!-- Desktop -->
                    <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end step-active">
                        <div
                            class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                            <span class="d-block h-100 title-medium text-uppercase">Applicazione Penalità</span>
                        </div>
                    </div>

                    <!-- Mobile -->
                    <div class="iscrizioni-header d-lg-none w-100">
                        <h4 class="step-title d-flex align-items-center justify-content-between drop-shadow">
                            <span class="d-block d-lg-inline"> Dati generali </span>
                            <span class="step">2/2</span>
                        </h4>
                        <p class="title-xsmall mt-40 mb-3">I campi contraddistinti dal simbolo asterisco sono
                            obbligatori</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="cmp-card mb-4">
            <div class="card has-bkg-grey shadow-sm mb-0">
                <div class="card-header border-0 p-0 mb-lg-30">
                    <div class="d-flex">
                        <h3 class="subtitle-large mb-0" id="">Estremi del Sinistro</h3>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="cmp-info-summary bg-white mb-4 mb-lg-30 p-3 p-lg-4">
                        <div class="card">
                            <div
                                class="card-header border-bottom border-light p-0 mb-0 d-flex justify-content-between d-flex justify-content-end">
                                <h3 id="nomeCognome" class="title-large-semi-bold mb-3"></h3>
                            </div>

                            <div class="card-body p-0">
                            <div class="single-line-info border-light">
                                    <div class="text-paragraph-small">Codice Fiscale</div>
                                    <div class="border-light border-0">
                                        <p class="data-text" id="CF"></p>
                                    </div>
                                </div>
                                <div class="single-line-info border-light">
                                    <div class="text-paragraph-small">Numero Patente</div>
                                    <div class="border-light border-0">
                                        <p class="data-text"  id="numeroPatente"></p>
                                    </div>
                                </div>
                                <div class="single-line-info border-light">
                                    <div class="text-paragraph-small">Punti Patente</div>
                                    <div class="border-light border-0">
                                        <p class="data-text" id="puntiPatente"></p>
                                    </div>
                                </div>
                                <div class="single-line-info border-light">
                                    <div class="text-paragraph-small">Sinistri Precendenti</div>
                                    <div id="sinistri" class="border-light">
                                        <p class="data-text" id="payment-code"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 d-none"></div>
                        </div>
                    </div>
                    <div class="card-header border-0 p-0 mb-lg-30">
                        <div class="d-flex">
                            <h3 class="subtitle-large mb-0" id="">Penalità Punti</h3>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="cmp-info-summary bg-white p-3 p-lg-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="single-line-info border-light">
                                        <div class="text-paragraph-small">Togli punti</div>
                                        <div class="mb-6">
                                            <input value="0" id="remove-points" type="number" min="0" max="15" class="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 d-none"></div>
                            </div>
                        </div>
                    </div>
                    <button style="background-color: rgb(239 68 68 / var(--tw-bg-opacity))" id="ritira-btn"
                        class=" btn  w-100">RITIRA PATENTE</button>

                        <button id="salva-btn" class="btn btn-primary fw-bold">Salva</button>
                </div>
            </div>
        </div>

        

        <div class="cmp-nav-steps">
            <nav class="steppers-nav">
                <button id="before-btn" type="button" class="btn btn-sm steppers-btn-prev p-0">
                    <svg class="icon icon-primary icon-sm" aria-hidden="true">
                        <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-chevron-left"></use>
                    </svg>
                    <span class="text-button-sm t-primary">Indietro</span>
                </button>


                <button id="next-btn" type="button" class="btn btn-primary btn-sm steppers-btn-confirm">
                    <span class="text-button-sm">Avanti</span>
                    <svg class="icon icon-white icon-sm" aria-hidden="true">
                        <use href="../assets/bootstrap-italia/dist/svg/sprites.svg#it-chevron-right"></use>
                    </svg>
                </button>
            </nav>
        </div>

        
    </div>




</body>

<script>
    window.__PUBLIC_PATH__ = "../assets/bootstrap-italia/dist/fonts";
</script>
<script src="../assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
<script src="../assets/script/store.js"></script>
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
                        $("#CF").text(data["CF"]);
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
                                        sinistriPrecedenti += "<p id='" + barcode + "' class='data-text barcode'>" + barcode + "</p>"
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
                $("#arrow-btn").removeClass("justify-between");
                $("#arrow-btn").addClass("justify-end");
            } else {
                $("#arrow-btn").removeClass("justify-end");
                $("#arrow-btn").addClass("justify-between");

            }

            if (currentGuidatore == totGuidatori) {
                $("#salva-btn").show();

            } else {
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
                    $("#ritira-btn").text("RITIRA PATENTE");
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
                            alert("Sinistro aggiunto, per visualizzare info sul sinistro immettere codice barcode: " + BARCODE);
                            sessionStorage.setItem("messaggioSinistro", "true");
                            window.location.replace("../index.php");
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