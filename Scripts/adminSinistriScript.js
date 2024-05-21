
$(document).ready(function(){
    

    getMultaData();


    function getMultaData(){

        $.ajax({
            url:"../../Backend/getSinistroData.php",
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

        

        data.forEach(sinistro => {
            $table +="<tr class='hover'>";
            $table +="<td>"+sinistro["barcode"]+"</td>";
            $table +="<td>"+sinistro["targa"]+"</td>";
            $table +="<td>"+sinistro["CFguidatori"]+"</td>";
            $table +="<td>"+sinistro["data_ora"]+"</td>";
            $table +="<td>"+sinistro["luogo"]+"</td>";
            $table +="<td>"+sinistro["causaIncidente"]+"</td>";
            $table +="<td>"+sinistro["numeroFeriti"]+"</td>";
            $table +="<td>"+sinistro["numeroMorti"]+"</td>";
            
            
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