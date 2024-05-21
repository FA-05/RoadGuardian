
$(document).ready(function(){
    

    getMultaData();
    sessionStorage.removeItem("tipo");
    sessionStorage.setItem("tipo", "admin");



    function getMultaData(){

        $.ajax({
            url:"../../Backend/getMultaData.php",
            cache: false,
            dataType: "json",
            success:function(rtn){
                if(rtn.error){
                    alert("Errore nel fetch dei dati: "+ rtn.error);
                }else{
                    //alert(JSON.stringify(rtn));
                    loadData(rtn);
                }
            }

        });

    }

    function loadData(data){
        //alert(data);
        $table="";

        data.forEach(multa => {
            $table +="<tr class='hover'>";
            $table +="<td class='barcode cursor-pointer'>"+multa["barcode"]+"</td>";
            $table +="<td>"+multa["targaVeicolo"]+"</td>";
            $table +="<td>"+multa["luogo"]+"</td>";
            $table +="<td>"+multa["causaMulta"]+"</td>";
            $table +="<td>"+multa["data_ora"]+"</td>";
            $table +="<td>"+multa["importo"]+"</td>";
            $table +="<td>"+multa["scadenzaImporto"]+"</td>";
            if(multa["pagata"]==1){
                $table +="<td>SI</td>";
            }else{
                $table +="<td>NO</td>";
            }
            $table +="<td>"+multa["idVigile"]+"</td>";
            $table +="</tr>";
        });

        $("#Table").append($table);
    }   


    $(document).on("click", "#btn-log-out", function(){

        $.ajax({
            url:"../../Backend/log-out.php",
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

    $(document).on("click", ".barcode", function(){

        let code=$(this).text();

        //alert(code);
        $.ajax({
            url: "../../Backend/getCodeInfo.php",
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

                    if(tipo=="multa"){
                        //alert("MULTA")
                        window.location.replace("../../Pages/infoMulta.php")
                    }else{
                        //alert("Sinistro");
                        //alert(JSON.stringify(data));
                        window.location.replace("../../Pages/infoSinistro.php")

                        
                    }
                }
            },
            error: function(xhr, status, error) {
                alert("Errore: "+ error + " STATUS: "+status +" XHR: "+xhr);
            }
        });
    });

});