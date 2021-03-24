<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bower_components/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/main.css">
    <title>Login</title>
    <style>
        body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
		}
		.user_card {
			height: 375px;
			margin-top: auto;
			margin-bottom: auto;
			background: linear-gradient(45deg, #000000, transparent);
			position: relative;
			flex-direction: column;
			box-shadow: 0 4px 8px 0 rgb(0, 0, 0), 0 6px 20px 0 rgb(0, 0, 0);
			-webkit-box-shadow: 0 4px 8px 0 rgb(0, 0, 0), 0 6px 20px 0 rgb(0, 0, 0);
			-moz-box-shadow: 0 4px 8px 0 rgb(0, 0, 0), 0 6px 20px 0 rgb(0, 0, 0);
			border-radius: 5px;

		}
		.login_btn {
			width: 100%;
			background: #2b2b2b !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #2b2b2b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card px-3 d-flex justify-content-around">
                <div class="d-flex justify-content-center mt-3">
                    <img src="assets/img/logo.png" class="brand_logo" height="90" alt="Logo">
                </div>
                <div class="d-flex justify-content-center">
                    <form id="loginform">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="kadi" type="text" name="username" class="form-control input_user" placeholder="kullanıcı adı">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="pass" type="password" name="password" class="form-control input_pass" placeholder="parola">
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                        <input type="submit" name="button" value="Giriş" class="btn login_btn">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>

        $('#loginform').on('submit',function (e){
            e.preventDefault();

            if ($('#kadi').val().length>0 && $('#pass').val().length > 0){
                var auth=$('#kadi').val()+":"+$('#pass').val();
                $.ajax({
                    url : "/api/check_login",
                    type : "POST",
                    dataType : "JSON",
                    data:{email:$('#kadi').val(),password:$('#pass').val()},
                    success : function(res){
                        console.log(res);
                        if(res.Response=="true"){
                            var auth=$('#kadi').val()+':'+$('#pass').val();
                            localStorage.setItem('auth',auth);
                            localStorage.setItem('mail',$('#kadi').val());
                            window.location="/";
                        }else{
                            alert("Yanlış kullanıcı adı şifre!");
                        }
                    }
                });
            }else{
                alert("Kullanıcı adı parola boş geçilemez!");
            }


        });
    </script>
</body>
</html>
