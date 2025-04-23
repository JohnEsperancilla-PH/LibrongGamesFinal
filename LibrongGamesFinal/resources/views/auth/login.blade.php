<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="LibrongGames">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Login - LibrongGames</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/LibrongGames-styles.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('home/styles.css') }}">

    <style>
        body {
            background-color: #1b2838;
            background-image: url('assets/images/bg-image.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Motiva Sans", Arial, Helvetica, sans-serif;
        }
        
        .login-container {
            background-color: #171a21;
            border-radius: 4px;
            padding: 24px;
            max-width: 450px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        
        .login-logo {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .login-logo img {
            max-width: 180px;
        }
        
        .login-form h3 {
            color: #fff;
            font-weight: 500;
            margin-bottom: 20px;
            text-align: center;
            font-size: 18px;
        }
        
        .form-control {
            background-color: #fff;
            border: 1px solid #32353c;
            color: #000;
            padding: 10px 12px;
            margin-bottom: 12px;
            border-radius: 3px;
            box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2) inset;
            font-size: 15px;
        }
        
        .form-control:focus {
            background-color: #fff;
            color: #000;
            border-color: #67c1f5;
            box-shadow: 0 0 3px rgba(103, 193, 245, 0.5);
        }
        
        .form-label {
            color: #b8b6b4;
            margin-bottom: 6px;
            font-weight: 400;
            font-size: 14px;
        }
        
        .login-btn {
            background: linear-gradient(to right, #75b022, #588a1b);
            color: #fff;
            border: none;
            border-radius: 2px;
            padding: 10px;
            width: 100%;
            font-weight: 500;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .login-btn:hover {
            background: linear-gradient(to right, #8ed629, #6db122);
        }
        
        .auth-links {
            display: flex;
            justify-content: space-between;
            margin-top: 16px;
        }
        
        .auth-links a {
            color: #67c1f5;
            text-decoration: none;
            font-size: 13px;
            transition: all 0.2s;
        }
        
        .auth-links a:hover {
            color: #9fdfff;
        }
        
        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }
        
        .checkbox-container input {
            margin-right: 8px;
        }
        
        .checkbox-container label {
            color: #b8b6b4;
            font-size: 13px;
        }
        
        .validation-error {
            color: #ff9696;
            font-size: 13px;
            margin-bottom: 15px;
            background-color: rgba(255, 0, 0, 0.2);
            padding: 8px;
            border-radius: 3px;
        }
        
        hr {
            border-color: #32353c;
            margin: 20px 0;
        }
        
        .info-text {
            color: #b8b6b4;
            font-size: 13px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-logo">
            <img src="assets/images/LibrongGames-logo.png" alt="LibrongGames">
        </div>
        
        <div class="login-form">
            <h3>SIGN IN</h3>
            
            @if ($errors->any())
                <div class="validation-error">
                    <ul class="mb-0 pl-0" style="list-style: none; margin: 0; padding: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if (session('status'))
                <div class="validation-error" style="background-color: rgba(0, 150, 0, 0.2); color: #a4e7a0;">
                    {{ session('status') }}
                </div>
            @endif
            
            <div class="info-text">
                Sign in to access your LibrongGames account to browse the store, access your library, and more.
            </div>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                
                <div class="checkbox-container">
                    <input type="checkbox" id="remember_me" name="remember" class="form-check-input">
                    <label for="remember_me">Remember me on this computer</label>
                </div>
                
                <button type="submit" class="login-btn">Sign in</button>
                
                <div class="auth-links">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    @endif
                    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Don't have an account? Create one</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
