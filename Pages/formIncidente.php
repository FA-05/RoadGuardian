<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Incidente</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <script src="../Scripts/genbar.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
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
                            <li class="breadcrumb-item active" aria-current="page">
                                <span class="separator">/</span>Inserimento Sinistro
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="cmp-heading pb-3 pb-lg-4">
                    <h1 class="title-xxxlarge">Inserimento Sinistro</h1>
                    <p class="subtitle-small">
                        Hai bisogno di assistenza?
                        <a href="mailto:therealfossi@altervista.org" class="title-small-semi-bold t-primary">Contattaci</a>
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="cmp-info-progress d-flex" data-progress="">
                    <!-- Desktop -->
                    <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end step-active">
                        <div
                            class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                            <span class="d-block h-100 title-medium text-uppercase">Inserimento Sinistro</span>

                        </div>
                    </div>
                    <!-- Desktop -->
                    <div class="info-progress-wrapper d-none d-lg-flex w-100 px-3 flex-column justify-content-end">
                        <div
                            class="info-progress-body d-flex justify-content-between align-self-end align-items-end w-100 py-3">
                            <span class="d-block h-100 title-medium text-uppercase">Dati generali</span>
                        </div>
                    </div>

                    <!-- Mobile -->
                    <div class="iscrizioni-header d-lg-none w-100">
                        <h4 class="step-title d-flex align-items-center justify-content-between drop-shadow">
                            <span class="d-block d-lg-inline"> Dati generali </span>
                            <span class="step">1/2</span>
                        </h4>
                        <p class="title-xsmall mt-40 mb-3">I campi contraddistinti dal simbolo asterisco sono
                            obbligatori</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <form class="cmp-card mb-4 shadow-sm p-4 bg-light rounded">
                    <h2 class="title-xxlarge mb-4">Guidatori</h2>
                    <div id="infoGuidatore" class="mb-4">
                        <div id="default-info" class="grid grid-cols-2 gap-2">
                            <input data-id="1" placeholder="1° Targa" id="targa-1"
                                class="targaVeicolo px-4 w-full h-[40px] rounded-md focus:outline-blue-400" type="text">
                            <div id="opzioni-targa-div-1" class="bg-slate-200 absolute z-10 mt-10"></div>
                            <input data-id="1" placeholder="1° CF" id="CF-1"
                                class="cfGuidatore px-4 w-full h-[40px] rounded-md focus:outline-blue-400" type="text">
                            <div id="opzioni-CF-div-1" class="bg-slate-200 absolute z-10 mt-10"></div>
                        </div>
                    </div>

                </form>
                <button id="btn-add" type="button" class="btn btn-primary mb-4">Aggiungi Guidatore</button>

                <form class="cmp-card mb-4 shadow-sm p-4 bg-light rounded">
                    <h2 class="title-xxlarge mb-4">Dettagli Incidente</h2>
                    <div class="form-group">
                        <label for="luogo" class="font-weight-bold">Luogo</label>
                        <input class="form-control" type="text" id="luogo">
                    </div>
                    <div class="form-group">
                        <label for="causaIncidente" class="font-weight-bold">Causa incidente</label>
                        <input class="form-control" type="text" id="causaIncidente">
                    </div>
                    <div class="form-group">
                        <label for="numeroMorti" class="font-weight-bold">Numero morti</label>
                        <input value="0" placeholder="0" min="0" class="form-control" type="number" id="numeroMorti">
                    </div>
                    <div class="form-group">
                        <label for="numeroFeriti" class="font-weight-bold">Numero feriti</label>
                        <input value="0" placeholder="0" min="0" class="form-control" type="number" id="numeroFeriti">
                    </div>
                    <div class="inputContainer" style="display: none;">
                        <svg id="barcode"></svg>
                    </div>
                    <button id="btn-salva-incidente" type="button" class="btn btn-success w-100">Salva</button>
                </form>
                <div id="errorMessage" role="alert" class="alert alert-danger d-none position-fixed top-3 right-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Compilare tutti i campi</span>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function () {

            setBarcode();
            function setBarcode() {
                var barcode = generateBarcode();
                displayBarcode(barcode);
            }

            $("#errorMessage").hide();


            var nGuidatori = 1;

            //*****************************TARGA-LIST******************************//

            $(document).on("keypress", ".targaVeicolo", function () {

                var targa = $(this).val();
                var element = $(this).data("id");
                //alert(targa);
                $.ajax({
                    url: "../PHPs/getTarghe.php",
                    method: "POST",
                    data: { targa: targa },
                    cache: false,
                    dataType: "json",

                    success: function (rtn) {
                        //alert(rtn);
                        if (rtn.error) {
                            alert("Errore --> Impossibile caricare le Targhe: " + rtn.error);
                        } else {
                            //alert(JSON.stringify(rtn));
                            displayTargheList(rtn, element);
                        }
                    },
                    error: function (xhr, status, error) {
                        alert("AJAX Error: " + status + " - " + error); // Handle AJAX errors
                    }

                });

            });


            function displayTargheList(targhe, element) {
                $(".opzione-targa").remove();
                targhe.forEach(targa => {
                    //alert("<option value='"+targa+"'> '"+ targa+"'</option>");
                    $("#opzioni-targa-div-" + element).append("<div data-id='" + nGuidatori + "' class='opzione-targa w-[300px]  bg-slate-100 border rounded-md p-1'>" + targa + "</div>");
                });

            }

            $(document).on("click", ".opzione-targa", function () {
                //alert($(this).text())
                var element = $(this).data("id");
                $("#targa-" + element).val($(this).text());
                $(".opzione-targa").remove();

            });

            $(document).on("mouseover", ".opzione-targa", function () {
                //alert($(this).text())
                $("#targa-" + element).val($(this).text());

            });

            //******************************************************************//

            //*****************************CF-LIST******************************//


            $(document).on("keypress", ".cfGuidatore", function () {

                var cf = $(this).val();
                var element = $(this).data("id");
                //alert(cf);
                $.ajax({
                    url: "../PHPs/getCF.php",
                    method: "POST",
                    data: { cf: cf },
                    cache: false,
                    dataType: "json",

                    success: function (rtn) {
                        //alert(rtn);
                        if (rtn.error) {
                            alert("Errore --> Impossibile caricare le Targhe: " + rtn.error);
                        } else {
                            //alert(JSON.stringify(rtn));
                            displayCFList(rtn, element);
                        }
                    },
                    error: function (xhr, status, error) {
                        alert("AJAX Error: " + status + " - " + error); // Handle AJAX errors
                    }

                });

            });


            function displayCFList(list_cf, element) {
                $(".opzione-CF").remove();
                list_cf.forEach(cf => {
                    //alert("<option value='"+targa+"'> '"+ targa+"'</option>");
                    $("#opzioni-CF-div-" + element).append("<div data-id='" + nGuidatori + "' class='opzione-CF w-[300px]  bg-slate-100 border rounded-md p-1'>" + cf + "</div>");
                });

            }

            $(document).on("click", ".opzione-CF", function () {
                //alert($(this).text())
                var element = $(this).data("id");
                $("#CF-" + element).val($(this).text());
                $(".opzione-CF").remove();

            });

            $(document).on("mouseover", ".opzione-CF", function () {
                var element = $(this).data("id");
                $("#CF-" + element).val($(this).text());

            });


            //******************************************************************//


            $(document).on("click", "#btn-add", function () {
                nGuidatori++;
                $("#infoGuidatore").append(
                    "<div class='grid grid-cols-2 gap-2 mt-2'>" +
                    "<input data-id='" + nGuidatori + "' placeholder='" + nGuidatori + "° Targa' id='targa-" + nGuidatori + "' class='targaVeicolo px-4 w-[300px] h-[40px] rounded-md focus:outline-blue-400' type='text'>" +
                    "<div id='opzioni-targa-div-" + nGuidatori + "' class=' bg-slate-200 absolute z-10 mt-10'></div>" +

                    "<input data-id='" + nGuidatori + "' placeholder='" + nGuidatori + "° CF' id='CF-" + nGuidatori + "' class='cfGuidatore px-4 w-[300px] h-[40px] rounded-md focus:outline-blue-400' type='text'>" +
                    "<div id='opzioni-CF-div-" + nGuidatori + "' class=' bg-slate-200 absolute z-10 mt-10 ml-[19.2rem]'></div>" +
                    "</div>"
                );
            });

            $(document).on("click", "#btn-salva-incidente", function () {


                var targa_guidatori = [];
                var codF_guidatori = [];

                for (let i = 1; i <= nGuidatori; i++) {
                    targa_guidatori.push($("#targa-" + i).val());
                    codF_guidatori.push($("#CF-" + i).val());
                }

                targa_guidatori = JSON.stringify(targa_guidatori);
                codF_guidatori = JSON.stringify(codF_guidatori);
                let luogo = $("#luogo").val();
                let causaIncidente = $("#causaIncidente").val();
                let numeroMorti = $("#numeroMorti").val();
                let numeroFeriti = $("#numeroFeriti").val();

                if (conrolloCampi(luogo, causaIncidente, numeroMorti, numeroFeriti)) {
                    //let  fotoIncidente =  ("#fotoIncidente").val();

                    //alert( fotoIncidente);
                    //alert(barcode);
                    $.ajax({
                        url: "../PHPs/insertIncidente.php",
                        cache: false,
                        method: "POST",
                        data: {
                            barcode: barcode,
                            targa_guidatori: targa_guidatori,
                            codF_guidatori: codF_guidatori,
                            luogo: luogo,
                            causaIncidente: causaIncidente,
                            numeroMorti: numeroMorti,
                            numeroFeriti: numeroFeriti
                        },
                        success: function (rtn) {
                            if (rtn == true) {
                                 //alert("Inserimento avvenuto con successo");
                                window.location.replace("formGuidatori.php");
                            } else {
                                alert("Errore durante l'inseriment del sinistro: " + rtn);
                            }
                        }
                    });
                } else {
                    $("#errorMessage").slideDown();
                    setTimeout(function () {
                        $("#errorMessage").slideUp();
                    }, 2000)

                }



            });

            $(document).on("click", "#page", function () {
                $(".opzione-targa").remove();
                $(".opzione-CF").remove();

            });

            function conrolloCampi(luogo, causaIncidente, numeroMorti, numeroFeriti) {
                let rtn = true;
                if (luogo == "" || causaIncidente == "" || numeroMorti == "" || numeroFeriti == "") {
                    rtn = false;
                }

                for (let i = 1; i <= nGuidatori; i++) {
                    let targa = $("#targa-" + i).val();
                    let cf = $("#CF-" + i).val();

                    if (targa == "" || cf == "") {
                        rtn = false;
                    }
                }

                return rtn;

            }
        });

    </script>
    <script>
        window.__PUBLIC_PATH__ = "../assets/bootstrap-italia/dist/fonts";
    </script>
    <script src="../assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
    <script src="../assets/script/store.js"></script>


</body>

</html>