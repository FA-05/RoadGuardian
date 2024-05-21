$(document).ready(function(){
    $("#errorMessage").hide();
    

    $(document).on("click", "#btn-login", function(){

        let username=$("#username").val();
        let password=$("#password").val();
       
        $.ajax({
            url:"../Backend/userLogin.php",
            method:"POST",
            data:{username:username, password:password},
            dataType: "json",
            success: function(rtn){
                //alert(rtn.login);
                if (rtn.login==true){
                    if(rtn.tipo=="admin"){
                        window.location.replace("../Pages/AdminPages/adminHome.php");
                        
                    }else{
                        window.location.replace("../Pages/vigileHome.php");
                    }
                }else{
                    //alert("hole");
                    $("#errorMessage").slideDown();
                    setTimeout(function(){
                        $("#errorMessage").slideUp();
                    },2000)
                }
            }

        });

    });

});