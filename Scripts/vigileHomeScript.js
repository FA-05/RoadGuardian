$(document).ready(function(){

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
                    alert("Logged-out");
                    location.reload();
                    
                }else{
                    alert("Errore: "+rtn);
                }

            }
        });

    });

});
