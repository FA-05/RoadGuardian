<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/bootstrap-italia/dist/css/bootstrap-italia-comuni.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <nav>
        <?PHP
        include ("../Pages/navbar.php")
            ?>

    </nav>

    <div class=" flex items-center justify-center h-screen pb-20">
        <div class="bg-gray-100 p-12 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-center text-2xl mb-6">Login</h2>
            <form>
                <div class="mb-6">
                    <label for="username" class="block font-medium text-gray-700">Username</label>
                    <input placeholder="Username" type="text" id="username" name="username"
                        class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                </div>
                <div class="mb-8">
                    <label for="password" class="block font-medium text-gray-700">Password</label>
                    <input placeholder="Password" type="password" id="password" name="password"
                        class="form-control w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                </div>
                <button id="btn-login" type="button"
                    class="btn btn-primary w-full py-2 px-4 bg-indigo-500 hover:bg-indigo-600 text-white font-medium rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
            </form>
            <br>
            <p class="text-center text-gray-600">Annulla e <a href="../index.php"
                    class="text-indigo-500 hover:text-indigo-600">torna alla pagina principale</a></p>
        </div>
    </div>


    <div id="errorMessage" role="alert" class="alert alert-error fixed top-3 right-3 w-full max-w-xs md:max-w-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Credenziali Sbagliate</span>
    </div>

</body>

<script>
    window.__PUBLIC_PATH__ = '../assets/bootstrap-italia/dist/fonts';
</script>
<script src="../assets/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js"></script>
<script src="../assets/script/scripts.js"></script>
<script src="../assets/script/store.js"></script>
<script src="../assets/script/pages/privacy.js"></script>
<script>
    $(document).ready(function () {
        $("#errorMessage").hide();


        $(document).on("click", "#btn-login", function () {

            let username = $("#username").val();
            let password = $("#password").val();

            $.ajax({
                url: "../PHPs/userLogin.php",
                method: "POST",
                data: { username: username, password: password },
                dataType: "json",
                success: function (rtn) {
                    //alert(rtn.login);
                    if (rtn.login == true) {
                        if (rtn.tipo == "admin") {
                            window.location.replace("AdminPages/adminPatentati.php");

                        } else {
                            window.location.replace("formIncidente.php");
                        }
                    } else {
                        //alert("hole");
                        $("#errorMessage").slideDown();
                        setTimeout(function () {
                            $("#errorMessage").slideUp();
                        }, 2000)
                    }
                }

            });

        });

    });
</script>

</html>