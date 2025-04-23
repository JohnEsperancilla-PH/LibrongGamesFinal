<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="LibrongGames">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Create Account - LibrongGames</title>

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
            padding: 40px 0;
        }
        
        .register-container {
            background-color: #171a21;
            border-radius: 4px;
            padding: 24px;
            max-width: 550px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin: 20px auto;
        }
        
        .register-logo {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .register-logo img {
            max-width: 180px;
        }
        
        .register-form h3 {
            color: #fff;
            font-weight: 500;
            margin-bottom: 16px;
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
        
        .register-btn {
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
        
        .register-btn:hover {
            background: linear-gradient(to right, #8ed629, #6db122);
        }
        
        .auth-links {
            display: flex;
            justify-content: center;
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
        
        .validation-error {
            color: #ff9696;
            font-size: 13px;
            margin-bottom: 15px;
            background-color: rgba(255, 0, 0, 0.2);
            padding: 8px;
            border-radius: 3px;
        }
        
        .form-row {
            display: flex;
            gap: 12px;
        }
        
        .form-row > div {
            flex: 1;
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
        
        .terms-checkbox {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .terms-checkbox input {
            margin-right: 8px;
            margin-top: 3px;
        }
        
        .terms-checkbox label {
            color: #b8b6b4;
            font-size: 13px;
            line-height: 1.4;
        }
        
        .terms-checkbox a {
            color: #67c1f5;
            text-decoration: none;
        }
        
        .terms-checkbox a:hover {
            color: #9fdfff;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-logo">
            <img src="assets/images/LibrongGames-logo.png" alt="LibrongGames">
        </div>
        
        <div class="register-form">
            <h3>CREATE YOUR ACCOUNT</h3>
            
            @if ($errors->any())
                <div class="validation-error">
                    <ul class="mb-0 pl-0" style="list-style: none; margin: 0; padding: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="info-text">
                Create a free account to access the LibrongGames store, maintain your game collection, and connect with other players.
            </div>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" required>
                </div>
                
                <div class="form-row">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                    </div>
                </div>
                
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="terms-checkbox">
                        <input type="checkbox" name="terms" id="terms" required>
                        <label for="terms">
                            {!! __('I am 13 years of age or older and agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">Terms of Service</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">Privacy Policy</a>',
                            ]) !!}
                        </label>
                    </div>
                @endif
                
                <button type="submit" class="register-btn">Create Account</button>
                
                <div class="auth-links">
                    <a href="{{ route('login') }}">Already have an account? Sign in</a>
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
