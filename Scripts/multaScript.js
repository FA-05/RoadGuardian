
$(document).ready(function () {

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
        $(".opzione").remove();
        targhe.forEach(targa => {
            //alert("<option value='"+targa+"'> '"+ targa+"'</option>");
            $("#opzioni-div").append("<div class='opzione w-[300px]  bg-slate-100 border rounded-md p-1' >"+targa+"</div>");
        });

    }

 


    $("#insert-success-alert").hide();




    $(document).on("click", "#btn-aggiungi-multa", function () {

        let targaVeicolo = $("#targaVeicolo").val();
        let luogo = $("#luogo").val();
        let causaMulta = $("#causaMulta").val();
        let importo = $("#importo").val();


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

                    setTimeout(function () {
                        $("#insert-success-alert").slideUp();
                    }, 2000);


                } else {
                    alert("Errore durante l'inserimento della multa: " +rtn);
                }
            }
        });

    });

    $(document).on("click", ".opzione", function(){
        //alert($(this).text())
        $("#targaVeicolo").val($(this).text());
        $(".opzione").remove();

    });

    $(".opzione").mouseover(function(){
        //alert($(this).text())
        $("#targaVeicolo").val($(this).text());
    });

});