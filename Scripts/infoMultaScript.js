$(document).ready(function () {

    var data = sessionStorage.getItem("data");
    var tipo = sessionStorage.getItem("tipo");

    //alert(tipo);
    if(tipo=="vigile" || tipo=="admin"){
        //alert("Vigile");
        $("#already-pagato-btn").remove();
        $("#conferma-alert").remove();
        $("#paga-btn").remove();
        $("#info-alert").remove();
        

        if(tipo=="vigile" ){
            $('#link').attr('href', "../Pages/vigileHome.php");
        }else{
            $('#link').attr('href', "../Pages/AdminPages/adminHome.php");
        }


    }else{
        $("#already-pagato-btn").hide();
        $("#conferma-alert").hide();
        $("#paga-btn").hide();
        $("#info-alert").hide();
    }

    

    //alert(data); 

    if (data == null) {
        window.location.replace("../home.php")
    } else {
        data = JSON.parse(data);

        $("#targaVeicolo").text(data["targaVeicolo"]);
        $("#luogo").text(data["luogo"]);
        $("#causaMulta").text(data["causaMulta"]);
        $("#importo").text(data["importo"]);
        $("#scadenzaImporto").text(data["scadenzaImporto"]);
        $("#data_ora").text(data["data_ora"]);
        
        if (data["pagata"] == 1) {
            $("#already-pagato-btn").show();
        }else{
            $("#paga-btn").show();
        }

        //alert(data["barcode"]);
        displayBarcode(data["barcode"]);



    }


    $(document).on("click", "#paga-btn", function () {

        barcode = data["barcode"];

        $.ajax({
            url: "../Backend/pagaMulta.php",
            method: "POST",
            data: { barcode: barcode },
            dataTyle: "json",
            success: function (result) {
                //alert(result);
                if (result == true) {
                    //alert("modificata");
                    $("#paga-btn").hide();
                    $("#already-pagato-btn").show();
                    $("#conferma-alert").slideDown();

                    setTimeout(function () {
                        $("#conferma-alert").slideUp();
                    }, 2000);
                } else {
                    $("#info-alert").slideDown();

                    setTimeout(function () {
                        $("#info-alert").slideUp();
                    }, 2000);
                }
                data["pagata"]=1;
                sessionStorage.removeItem("data");
                sessionStorage.setItem("data", JSON.stringify(data));
            }

        });

    });

    $(document).on("click", "#already-pagato-btn", function () {

        $("#info-alert").slideDown();

        setTimeout(function () {
            $("#info-alert").slideUp();
        }, 2000);

    });

});