
$(document).ready(function(){
    

    getMultaData();
    


    sessionStorage.removeItem("tipo");
    sessionStorage.setItem("tipo", "admin");


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
            $table +="<td class='barcode cursor-pointer'>"+sinistro["barcode"]+"</td>";
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