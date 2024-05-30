$(document).ready(function(){

    sessionStorage.removeItem("data");

    $("#errorMessage").hide();


    $(document).on("click", "#btn-invia-codice", function(){

        let code=$("#code").val();

        $.ajax({
            url: "PHPs/getCodeInfo.php",
            method: "POST",
            data: {code: code},
            dataType: "json", // Assicurati di trattare la risposta come JSON
            success: function(response){
                if(response.error) {
                    console.log(response.error);
                    alert(response.error);
                    

                } else {
                    let data=response["dati"];
                    let tipo= response["tipo"];
                    sessionStorage.setItem("data", JSON.stringify(data));
                    if(tipo=="sinistro"){
                        window.location.replace("Pages/privacy.php")
                    }else{
                        alert("You fucked up something!! :/");

                        
                    }
                }
            },
            error: function(){
                alert("BARCODE INESISTENTE O NON INSERITO CORRETTAMENTE");
            }
        });
    });
});