
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V12</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="cssjs/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssjs/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssjs/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssjs/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssjs/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssjs/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssjs/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssjs/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="cssjs/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('cssjs/login/images/img-01.jpg');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <form action="index.php?action=login" method="post" enctype="multipart/form-data" class="login100-form validate-form">
                <div class="login100-form-avatar">
                    <img src="cssjs/login/images/yen.jpg" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-20 p-b-45">
						Vanessa Nguyen
					</span>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
                    <input class="input100" type="text" name="email" id="email" placeholder="email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" id="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                </div>

                <div class="container-login100-form-btn p-t-10">

                    <button type="submit" name="login" class="login100-form-btn">
                        Login
                    </button>

                </div>

                <div class="text-center w-full p-t-25 p-b-230">
                    <a href="#" class="txt1">
                        Forgot Username / Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="cssjs/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="cssjs/login/vendor/bootstrap/js/popper.js"></script>
<script src="cssjs/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="cssjs/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="cssjs/login/js/main.js"></script>

</body>
</html>