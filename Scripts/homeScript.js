$(document).ready(function(){

    sessionStorage.removeItem("data");
    sessionStorage.removeItem("tipo")


    $("#errorMessage").hide();


    $(document).on("click", "#btn-invia-codice", function(){

        let code=$("#code").val();

        $.ajax({
            url: "Backend/getCodeInfo.php",
            method: "POST",
            data: {code: code},
            dataType: "json", // Assicurati di trattare la risposta come JSON
            success: function(response){
                if(response.error) {
                    //alert(response.error);
                    $("#errorMessage").slideDown();
                    setTimeout(function(){
                        $("#errorMessage").slideUp();
                    },2000)

                } else {
                    //alert(JSON.stringify(response))
                    let data=response["dati"];
                    let tipo= response["tipo"];
                    //alert(JSON.stringify(data));
                    sessionStorage.setItem("data", JSON.stringify(data));
                    if(tipo=="multa"){
                        window.location.replace("Pages/infoMulta.php")
                    }else{
                        //alert("Sinistro");
                        //alert(JSON.stringify(data));
                        window.location.replace("Pages/infoSinistro.php")

                        
                    }
                }
            },
            error: function(){
                alert("Errore di comunicazione con il server.");
            }
        });
    });
});