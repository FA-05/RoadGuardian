
$(document).ready(function(){
    

    getMultaData();


    function getMultaData(){

        $.ajax({
            url:"../../Backend/getPatentatiData.php",
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

        

        data.forEach(patentato => {
            $table +="<tr class='hover'>";
            $table +="<td>"+patentato["CF"]+"</td>";
            $table +="<td>"+patentato["nome"]+"</td>";
            $table +="<td>"+patentato["cognome"]+"</td>";
            $table +="<td>"+patentato["nmeroPatente"]+"</td>";
            $table +="<td>"+patentato["puntiPatente"]+"</td>";
            $table +="<td>"+patentato["indirizzo"]+"</td>";
            $table +="<td>"+patentato["email"]+"</td>";
            $table +="<td>"+patentato["patenteRitirata"]+"</td>";
            
            
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