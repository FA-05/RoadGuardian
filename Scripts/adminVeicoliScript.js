
$(document).ready(function(){
    

    getMultaData();


    function getMultaData(){

        $.ajax({
            url:"../../Backend/getVeicoloData.php",
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

        

        data.forEach(veicolo => {
            $table +="<tr class='hover'>";
            $table +="<td>"+veicolo["targa"]+"</td>";
            $table +="<td>"+veicolo["modelloAuto"]+"</td>";
            $table +="<td>"+veicolo["marca"]+"</td>";
            $table +="<td>"+veicolo["CFproprietario"]+"</td>";            
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