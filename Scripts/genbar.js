function generateBarcode(){
    barcode="";
    number=7;

    for(let i=0;i<number;i++){
        barcode+=Math.floor(Math.random()*11);
    }

    if(BarcodeExists(barcode)){
        generateBarcode();
    }

    return barcode;
}


function BarcodeExists(barcode){
    //alert(barcode);
    $.ajax({
        url:"../PHPs/checkBarcode.php",
        method:"POST",
        data:{barcode:barcode},
        success:function(rtn){
            if(rtn==true){
                return true;
            }else{
                return false;
            }
        }

    });

}


    // You can call this function with the desired barcode data
    function displayBarcode(data) {
        JsBarcode("#barcode", data, {
            format: "CODE128", // This is a common barcode format, adjust as needed
            lineColor: "#000", // Barcode color
            width: 2,        // Width of a single bar
            height: 40,      // Height of the barcode
            displayValue: true,
            background: "rgba(0, 0, 0, 0)", // Whether to display text below the barcode
        });
    }

