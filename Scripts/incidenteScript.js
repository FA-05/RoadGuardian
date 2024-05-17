$(document).ready(function () {

    setBarcode();
    function setBarcode() {
        var barcode = generateBarcode();
        displayBarcode(barcode);
    }

 

    var nGuidatori = 1;

//*****************************TARGA-LIST******************************//

    $(document).on("keypress", ".targaVeicolo", function(){

        var targa=$(this).val();
        var element=$(this).data("id");
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
                    displayTargheList(rtn,element);
                }
            },
            error: function(xhr, status, error) {
                alert("AJAX Error: " + status + " - " + error); // Handle AJAX errors
            }

        });

    });
    

    function displayTargheList(targhe,element){
        $(".opzione-targa").remove();
        targhe.forEach(targa => {
            //alert("<option value='"+targa+"'> '"+ targa+"'</option>");
            $("#opzioni-targa-div-"+element).append("<div data-id='"+nGuidatori+"' class='opzione-targa w-[300px]  bg-slate-100 border rounded-md p-1'>"+targa+"</div>");
        });

    }

    $(document).on("click", ".opzione-targa", function(){
        //alert($(this).text())
        var element =$(this).data("id");
        $("#targa-"+element).val($(this).text());
        $(".opzione-targa").remove();

    });

    $(document).on("mouseover", ".opzione-targa", function(){
        //alert($(this).text())
        $("#targa-"+element).val($(this).text());

    });

//******************************************************************//

//*****************************CF-LIST******************************//

    
$(document).on("keypress", ".cfGuidatore", function(){

    var cf=$(this).val();
    var element=$(this).data("id");
    //alert(cf);
    $.ajax({
        url: "../Backend/getCF.php",
        method:"POST",
        data:{cf:cf},
        cache: false,
        dataType:"json",

        success:function(rtn){
            //alert(rtn);
            if(rtn.error){
                alert("Errore --> Impossibile caricare le Targhe: "+rtn.error);
            }else{
                //alert(JSON.stringify(rtn));
                displayCFList(rtn,element);
            }
        },
        error: function(xhr, status, error) {
            alert("AJAX Error: " + status + " - " + error); // Handle AJAX errors
        }

    });

});


function displayCFList(list_cf,element){
    $(".opzione-CF").remove();
    list_cf.forEach(cf => {
        //alert("<option value='"+targa+"'> '"+ targa+"'</option>");
        $("#opzioni-CF-div-"+element).append("<div data-id='"+nGuidatori+"' class='opzione-CF w-[300px]  bg-slate-100 border rounded-md p-1'>"+cf+"</div>");
    });

}

$(document).on("click", ".opzione-CF", function(){
    //alert($(this).text())
    var element =$(this).data("id");
    $("#CF-"+element).val($(this).text());
    $(".opzione-CF").remove();

});

$(document).on("mouseover", ".opzione-CF", function(){
    var element =$(this).data("id");
    $("#CF-"+element).val($(this).text());

});


//******************************************************************//


    $(document).on("click", "#btn-add", function () {
        nGuidatori++;
        $("#infoGuidatore").append(
            "<div class='grid grid-cols-2 gap-2 mt-2'>" +
            "<input data-id='"+nGuidatori+"' placeholder='"+nGuidatori+"° Targa' id='targa-" + nGuidatori + "' class='targaVeicolo px-4 w-[300px] h-[40px] rounded-md focus:outline-blue-400' type='text'>" +
            "<div id='opzioni-targa-div-"+nGuidatori+"' class=' bg-slate-200 absolute z-10 mt-10'></div>"+

            "<input data-id='"+nGuidatori+"' placeholder='"+nGuidatori+"° CF' id='CF-" + nGuidatori + "' class='cfGuidatore px-4 w-[300px] h-[40px] rounded-md focus:outline-blue-400' type='text'>" +
            "<div id='opzioni-CF-div-"+nGuidatori+"' class=' bg-slate-200 absolute z-10 mt-10 ml-[19.2rem]'></div>"+
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
        // let  fotoIncidente =  ("#fotoIncidente").val();

        // alert( causaIncidente);
        //alert(barcode);
        $.ajax({
            url: "../Backend/insertIncidente.php",
            cache: false,
            method: "POST",
            data: {
                barcode:barcode,
                targa_guidatori: targa_guidatori,
                codF_guidatori: codF_guidatori,
                luogo: luogo,
                causaIncidente: causaIncidente,
                numeroMorti: numeroMorti,
                numeroFeriti: numeroFeriti
            },
            success: function (rtn) {
                if (rtn == true) {
                    // alert("Inserimento avvenuto con successo");
                    window.location.replace("formGuidatori.php");
                } else {
                    alert("Errore durante l'inseriment del sinistro: " + rtn);
                }
            }
        });

    });

    $(document).on("click", "#page", function(){
        $(".opzione-targa").remove();
        $(".opzione-CF").remove();

    });
});
 