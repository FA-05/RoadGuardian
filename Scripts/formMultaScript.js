
$(document).ready(function () {

    $("#errorMessage").hide();

    setBarcode();
    function setBarcode() {
        var barcode = generateBarcode();

        displayBarcode(barcode);
    }


    $(document).on("keypress", "#targaVeicolo", function(){

        var targa=$("#targaVeicolo").val();
        //alert(targa);
        $.ajax({
            url: "../Backend/getTarghe.php",
            method:"POST",
            data:{targa:targa},
            cache: false,
            dataType:"json",

            success:function(rtn){
                //alert(rtn);
                if(rtn.error){
                    alert("Errore --> Impossibile caricare le Targhe: "+rtn.error);
                }else{
                    //alert(JSON.stringify(rtn));
                    displayTargheList(rtn);
                }
            },
            error: function(xhr, status, error) {
                alert("AJAX Error: " + status + " - " + error); // Handle AJAX errors
            }

        });

    });
    

    function displayTargheList(targhe){
        let cont=0
        $(".opzione").remove();
        targhe.forEach(targa => {
            //alert("<option value='"+targa+"'> '"+ targa+"'</option>");
            if(cont!=1){
                $("#opzioni-div").append("<div class='opzione w-[300px]  border-b-2 border-x-blue-200 p-1'  >"+targa+"</div>");

            }else{
                $("#opzioni-div").append("<div class='opzione w-[300px]  p-1'  >"+targa+"</div>");

            }
            cont++;
        });

    }

 


    $("#insert-success-alert").hide();




    $(document).on("click", "#btn-aggiungi-multa", function () {

        let targaVeicolo = $("#targaVeicolo").val();
        let luogo = $("#luogo").val();
        let causaMulta = $("#causaMulta").val();
        let importo = $("#importo").val();

        if(controllaCampi(targaVeicolo,luogo,causaMulta,importo)){
            $.ajax({
                url: "../Backend/insertMulta.php",
                method: "POST",
                data: { barcode: barcode, targaVeicolo: targaVeicolo, luogo: luogo, causaMulta: causaMulta, importo: importo },
                success: function (rtn) {
                    if (rtn == true) {
    
                        setBarcode();
                        $("#targaVeicolo").val(" ");
                        $("#luogo").val(" ");
                        $("#causaMulta").val(" ");
                        $("#importo").val(" ");
                        $("#insert-success-alert").slideDown();
                        sessionStorage.setItem("messaggioMulta", "true");
                        window.location.href = 'vigileHome.php'; 
                       
                        
    
    
                    } else {
                        alert("Errore durante l'inserimento della multa: " +rtn);
                    }
                }
            });
        }else{
            $("#errorMessage").slideDown();
            setTimeout(function(){
                $("#errorMessage").slideUp();
            },2000)
        }


        

    });

    function controllaCampi(targaVeicolo,luogo,causaMulta,importo){
        let rtn=true
        if(targaVeicolo=="" || luogo=="" || causaMulta =="" || importo ==""){
            rtn=false;

        }

        return rtn;
    }

    $(document).on("click", ".opzione", function(){
        //alert($(this).text())
        $("#targaVeicolo").val($(this).text());
        $(".opzione").remove();

    });

    $(".opzione").mouseover(function(){
        //alert($(this).text())
        $("#targaVeicolo").val($(this).text());
    });

    $(document).on("click", "#page", function(){
        $(".opzione").remove();
    });

});