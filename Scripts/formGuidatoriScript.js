$(document).ready(function () {

    var currentGuidatore = 0;
    var totGuidatori;
    var newData = {};
    var cf_list = new Array();
    var createnewData = false;
    var BARCODE="";

    $("#guidatore-box").show();
    $("#allert-box").hide();
    getData(currentGuidatore);

    function getData(currentGuidatore) {

        $.ajax({
            url: "../Backend/getDataFromIncidentePage.php",
            cache: false,
            dataType: "json",
            success: function (data) {
                if (!createnewData) {
                    //alert(data["barcode"]);
                    //alert(data["CFguidatori"]);
                    BARCODE=data["barcode"];
                    cf_list = JSON.parse(data["CFguidatori"]);
                    //alert(cf_list);
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

        $.ajax({
            url: "../Backend/getGuidatoreData.php",
            method: "POST",
            data: { codFiscale: codFiscale },
            cache: false,
            dataType: "json",
            success: function (data) {
                //alert(JSON.stringify(data));
                if (!data || jQuery.isEmptyObject(data)) {
                    $("#guidatore-box").hide();
                    $("#allert-box").show();
                    $("#AlertCFGuidatore").text("Codice Fiscale: "+codFiscale);
                    
                } else {
                    if (data.error) {
                        alert("Errore: " + data.error);
                    } else {
                        $("#guidatore-box").show();
                        $("#allert-box").hide();
                        $("#nomeCognome").text(data["nome"] + " " + data["cognome"]);
                        $("#numeroPatente").text(data["numeroPatente"]);
                        $("#puntiPatente").text(data["puntiPatente"]);
                        loadSinistri(codFiscale);
                    }
                }
            },
            error: function(xhr, status, error) {
                alert("Errore nella richiesta AJAX: " + error);
            }
        });
        
    }


    function loadSinistri(codFiscale) {
        $.ajax({
            url: "../Backend/getGuidatoreSinistri.php",
            method: "POST",
            data: { codFiscale: codFiscale},
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

                        if(barcode != BARCODE){
                            array_cf.forEach(cf => {
                                if (cf == codFiscale) {
                                    sinistroExist = true;
                                    sinistriPrecedenti += "<p id='"+barcode+"' class='barcode'>" + barcode + "</p>"
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

    $(document).on("click", ".next-btn", function () {
        if (saveData()) {
            currentGuidatore++;
            displayBTN();

            getData(currentGuidatore);
            $("#remove-points").val(newData[cf_list[currentGuidatore]][0]);


        }

    });

    $(document).on("click", ".before-btn", function () {
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
            $(".before-btn").hide();
            $(".arrow-btn").removeClass("justify-between");
            $(".arrow-btn").addClass("justify-end");
        } else {
            $(".before-btn").show()
            $(".arrow-btn").removeClass("justify-end");
            $(".arrow-btn").addClass("justify-between");

        }

        if (currentGuidatore == totGuidatori) {
            $(".next-btn").hide();
            $("#salva-btn").show();

        } else {
            $(".next-btn").show();
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
            cf_list=JSON.stringify(cf_list)

            $.ajax({
                url: "../Backend/updateInfoPatentato.php",
                method: "POST",
                cache: "false",
                data: { dati: dati , cf_list:cf_list},
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