<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/LibrongGames-logo.png" alt="LibrongGames">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Store</a></li>
                        <li><a href="explore.html">Library</a></li>
                        <li><a href="details.html">Community</a></li>
                        <li><a href="author.html">Support</a></li>
                        
                        @if (Route::has('login'))
                            @auth
                                <li class="profile-menu"><a href="#">
                                    <img src="assets/images/user-avatar.png" class="avatar-img" alt="Profile">
                                    <span>My Account</span>
                                </a></li>
                                <x-app-layout>
                                </x-app-layout>
                            @else
                                <li><a href="{{ route('login') }}" class="login-btn">Login</a></li>
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="register-btn">Register</a></li>
                                @endif
                            @endauth
                        @endif

                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->