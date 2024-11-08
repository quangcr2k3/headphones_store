<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Register') }}</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/tai-khoan/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('../css/tai-khoan/images/background.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <span class="login100-form-logo">
                        <a href="{{ route('welcome') }}"><img
                                src="../css/tai-khoan/images/headphone_light.png" width = "80px" alt=""></a>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        ĐĂNG KÝ
                    </span>

                    <!-- Tên -->
                    <div class="wrap-input100 validate-input" data-validate="Enter your name">
                        <input id="name" type="text"
                            class="input100 @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" placeholder="Tên của bạn" required autocomplete="name" autofocus>
                        <span class="focus-input100" data-placeholder="&#xf18e;"></span>

                        <!-- Thông báo lỗi Tên -->
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="wrap-input100 validate-input" data-validate="Enter your email">
                        <input id="email" type="email"
                            class="input100 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" placeholder="Email đăng ký" required autocomplete="email">
                        <span class="focus-input100" data-placeholder="&#xf18e;"></span>

                        <!-- Thông báo lỗi Email -->
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Mật khẩu -->
                    <div class="wrap-input100 validate-input" data-validate="Enter your password">
                        <input id="password" type="password"
                            class="input100 @error('password') is-invalid @enderror" name="password"
                            placeholder="Mật khẩu" required autocomplete="new-password">
                        <span class="focus-input100" data-placeholder="&#xf18e;"></span>

                        <!-- Thông báo lỗi Mật khẩu -->
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Xác nhận Mật khẩu -->
                    <div class="wrap-input100 validate-input" data-validate="Confirm your password">
                        <input id="password-confirm" type="password" class="input100"
                            name="password_confirmation" placeholder="Xác nhận mật khẩu" required autocomplete="new-password">
                        <span class="focus-input100" data-placeholder="&#xf18e;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            ĐĂNG KÝ
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('login') }}">
                            Đã có tài khoản? Đăng nhập!
                        </a>
                    </div>                    
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="../css/tai-khoan/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../css/tai-khoan/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../css/tai-khoan/vendor/bootstrap/js/popper.js"></script>
    <script src="../css/tai-khoan/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../css/tai-khoan/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../css/tai-khoan/vendor/daterangepicker/moment.min.js"></script>
    <script src="../css/tai-khoan/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../css/tai-khoan/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../css/tai-khoan/js/main.js"></script>

</body>

</html>
