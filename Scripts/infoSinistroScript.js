$(document).ready(function () {


    var data = JSON.parse(sessionStorage.getItem("data"));

    //alert(data);

    $("#barcode").text(data["barcode"]);
    getTarghe(JSON.parse(data["targa"]));
    getCF(JSON.parse(data["CFguidatori"]));

    $("#luogo").text(data["luogo"]);
    $("#data_ora").text(data["data_ora"]);
    $("#causaIncidente").text(data["causaIncidente"]);
    $("#numeroMorti").text(data["numeroMorti"]);
    $("#numeroFeriti").text(data["numeroFeriti"]);
    //$("#causaIncidente").text(data["causaIncidente"]);

    function getCF(cf_list) {
        let rtn = "";
        
        cf_list.forEach(cf => {
            rtn+="<p>"+cf+"</p>";
        });

        $("#cfGuidatori").append(rtn);
    }

    function getTarghe(targa_list) {
        let rtn = "";
        
        targa_list.forEach(targa => {
            rtn+="<p>"+targa+"</p>";
        });

        $("#targa").append(rtn);
    }


});