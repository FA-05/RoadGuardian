$(document).ready(function(){
    sessionStorage.setItem("tipo", "user");

    getVigileBarcodes();

    $("#successMessage").hide();
    if(sessionStorage.getItem("messaggioSinistro")){
        //alert("true");
        sessionStorage.removeItem("messaggioSinistro");
        $("#messggio").text("Sinistro registrato correttamente");
        $("#successMessage").slideDown();
        setTimeout(function(){
            $("#successMessage").slideUp();
        },2000)
    }

    if(sessionStorage.getItem("messaggioMulta")){
        sessionStorage.removeItem("messaggioMulta");
        $("#messggio").text("Multa Inserita correttamente");
        $("#successMessage").slideDown();
        setTimeout(function(){
            $("#successMessage").slideUp();
        },2000)
    } 

    $(document).on("click", "#btn-log-out", function(){

        $.ajax({
            url:"../Backend/log-out.php",
            cache: false,
            dataType:"json",
            success: function(rtn){
                if(rtn == true){
                    //alert("Logged-out");
                    location.reload();
                    
                }else{
                    alert("Errore: "+rtn);
                }

            }
        });

    });

    function getVigileBarcodes(){
        $.ajax({
            url:"../Backend/getVigileBarcodes.php",
            dataType:"json",
            method:"POST",
            success: function(data){
                if(data.error){
                    alert("Error: "+JSON.stringify(data.error));
                }else{
                    //alert(JSON.stringify(data));
                    loadBarcodes(data);
                }

            },
            error: function(xhr, status, error) {
                alert("Errore: "+ error + " STATUS: "+status +" XHR: "+xhr);
            }

        });
    }

    function loadBarcodes(data){
        let multe=data["Multe"];
        let sinistri=data["Sinistri"];
        multe.forEach(multa => {
            $("#Multe").append("<li ><a class='barcode'>"+multa+"</a></li>");
        });

        sinistri.forEach(sinistro => {
            $("#Sinistri").append("<li ><a class='barcode'>"+sinistro+"</a></li>");
        });
    }

    sessionStorage.removeItem("data");



    $(document).on("click", ".barcode", function(){

        let code=$(this).text();

        //alert(code);
        $.ajax({
            url: "../Backend/getCodeInfo.php",
            method: "POST",
            data: {code: code},
            dataType: "json", // Assicurati di trattare la risposta come JSON
            success: function(response){
                if(response.error) {
                    alert(response.error);
                } else {
                    //alert(JSON.stringify(response))
                    let data=response["dati"];
                    let tipo= response["tipo"];
                    //alert(JSON.stringify(data));
                    sessionStorage.setItem("data", JSON.stringify(data));
                    sessionStorage.setItem("tipo", "vigile");

                    if(tipo=="multa"){
                        //alert("MULTA")
                        window.location.replace("../Pages/infoMulta.php")
                    }else{
                        //alert("Sinistro");
                        //alert(JSON.stringify(data));
                        window.location.replace("../Pages/infoSinistro.php")

                        
                    }
                }
            },
            error: function(xhr, status, error) {
                alert("Errore: "+ error + " STATUS: "+status +" XHR: "+xhr);
            }
        });
    });

});
