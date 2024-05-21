
$(document).ready(function(){
    

    getMultaData();


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
            $table +="<td>"+multa["barcode"]+"</td>";
            $table +="<td>"+multa["targaVeicolo"]+"</td>";
            $table +="<td>"+multa["luogo"]+"</td>";
            $table +="<td>"+multa["causaMulta"]+"</td>";
            $table +="<td>"+multa["data_ora"]+"</td>";
            $table +="<td>"+multa["importo"]+"</td>";
            $table +="<td>"+multa["scadenzaImporto"]+"</td>";
            $table +="<td>"+multa["pagata"]+"</td>";
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

});