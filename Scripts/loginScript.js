$(document).ready(function(){
    $("#errorMessage").hide();
    

    $(document).on("click", "#btn-login", function(){

        let username=$("#username").val();
        let password=$("#password").val();
       
        $.ajax({
            url:"../Backend/userLogin.php",
            method:"POST",
            data:{username:username, password:password},
            success: function(rtn){
                if (rtn==true){
                    window.location.replace("../Pages/vigileHome.php");
                }else{
                    $("#errorMessage").slideDown();
                    setTimeout(function(){
                        $("#errorMessage").slideUp();
                    },2000)
                }
            }

        });

    });

});