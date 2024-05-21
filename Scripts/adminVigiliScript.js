
$(document).ready(function(){

    

    getMultaData();


    function getMultaData(){

        $.ajax({
            url:"../../Backend/getVigiliData.php",
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
            $table +="<td>"+veicolo["idVigile"]+"</td>";
            $table +="<td>"+veicolo["nome"]+"</td>";
            $table +="<td>"+veicolo["cogome"]+"</td>";
            $table +="<td>"+veicolo["email"]+"</td>"; 
            $table +="<td>"+veicolo["telefono"]+"</td>";  
            $table +="<td>"+veicolo["indirizzo"]+"</td>";             
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