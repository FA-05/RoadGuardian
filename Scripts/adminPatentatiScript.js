
$(document).ready(function(){
    

    getMultaData();

    getMultaData();
    sessionStorage.removeItem("tipo");
    sessionStorage.setItem("tipo", "admin");

    document.getElementById('searchInput').addEventListener('keyup', function () {
        var input = this.value.toLowerCase(); // Ottieni il testo di ricerca in minuscolo
        var rows = document.querySelectorAll("#Table tr"); // Ottieni tutte le righe della tabella

        // Itera su ogni riga della tabella
        rows.forEach(function (row) {
            var cells = row.getElementsByTagName("td"); // Ottieni le celle della riga

            // Controlla se una delle celle contiene il testo di ricerca
            var found = false;
            for (var i = 0; i < cells.length; i++) {
                var cell = cells[i];
                if (cell.textContent.toLowerCase().indexOf(input) > -1) {
                    found = true;
                    break;
                }
            }

            // Mostra o nascondi la riga in base al risultato della ricerca
            if (found) {
                row.style.display = ""; // Mostra la riga
            } else {
                row.style.display = "none"; // Nascondi la riga
            }
        });
            });


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
            $table +="<td>"+patentato["numeroPatente"]+"</td>";
            $table +="<td>"+patentato["puntiPatente"]+"</td>";
            $table +="<td>"+patentato["indirizzo"]+"</td>";
            $table +="<td>"+patentato["email"]+"</td>";

            if(patentato["patenteRitirata"]==1){
                $table +="<td>SI</td>";
            }else{
                $table +="<td>NO</td>";
            }
            
            
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