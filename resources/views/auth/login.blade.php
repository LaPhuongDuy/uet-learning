
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

    <title>Existing Login Form a Flat Responsive Widget Template :: W3layouts</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->
    <!-- Style --> <link rel="stylesheet" href="{{asset('css/login.css')}}" type="text/css" media="all">
    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

<h1>UET Learning System</h1>

<div class="w3layoutscontaineragileits">
    <h2>Đăng nhập</h2>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="email" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="EMAIL" required autofocus>
        @if ($errors->has('email'))
            <div class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
        @endif
        <input type="password" name="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="PASSWORD" required="">
        @if ($errors->has('password'))
            <div class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
        @endif
        <ul class="agileinfotickwthree">
            <li>
                <input type="checkbox" id="brand1" value="" {{ old('remember') ? 'checked' : '' }}>
                <label for="brand1"><span></span>Ghi nhớ đăng nhập</label>
                <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
            </li>
        </ul>
        <div class="aitssendbuttonw3ls">
            <input type="submit" value="LOGIN">
            <p><a href="/register-student" class="w3_play_icon1">Đăng ký tài khoản sinh viên</a></p>
            <p><a href="/register-lecturer" class="w3_play_icon1">Đăng ký tài khoản giảng viên</a></p>
            <div class="clear"></div>
        </div>
    </form>
</div>

<div class="w3footeragile">
    <p> &copy; 2017 Existing Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
</div>
</body>
<!-- //Body -->
</html>
