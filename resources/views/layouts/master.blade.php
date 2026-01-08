<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopZone - Online Shopping</title>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom Style -->
    <link href="{{ asset('css/shopzone.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('home') }}" style="color: inherit; text-decoration: none; display: flex; align-items: center; gap: 8px;">
                    <span class="material-icons">shopping_bag</span>
                    ShopZone
                </a>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search for products, brands and more...">
                <span class="material-icons">search</span>
            </div>
            <nav class="main-nav">
                <ul style="display: flex; list-style: none; gap: 20px; align-items: center; margin: 0; padding: 0;">
                    <li><a href="{{ route('home') }}" style="text-decoration: none; color: inherit; font-weight: 500;">Home</a></li>
                    <li><a href="{{ route('about') }}" style="text-decoration: none; color: inherit; font-weight: 500;">About</a></li>
                    <li><a href="{{ route('contact') }}" style="text-decoration: none; color: inherit; font-weight: 500;">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                @if (Route::has('login'))
                    @auth
                        <span>
                            <span class="material-icons">person</span>
                            {{ Auth::user()->name }}
                        </span>
                        <span>
                             <!-- Logout Link using form -->
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 5px;">
                                <span class="material-icons">logout</span>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </span>
                    @else
                        <span onclick="openAuthModal()">
                            <span class="material-icons">person</span>
                            Login
                        </span>
                    @endauth
                @endif
                <span>
                    <span class="material-icons">shopping_cart</span>
                    Cart
                </span>
            </div>
        </div>
    </header>

    <!-- Auth Modal -->
    <div class="auth-modal" id="authModal">
        <div class="auth-container">
            <span class="material-icons close-modal" onclick="closeAuthModal()">close</span>
            
            <div class="auth-header">
                <h2>Welcome Back!</h2>
                <p>Login or create an account to continue</p>
            </div>

            <div class="auth-tabs">
                <button class="auth-tab active" onclick="switchTab('login')">Login</button>
                <button class="auth-tab" onclick="switchTab('register')">Register</button>
            </div>

            <!-- Login Form -->
            <form class="auth-form active" id="loginForm" method="POST" action="{{ Route::has('login') ? route('login') : '#' }}">
                @csrf
                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-with-icon">
                        <span class="material-icons">email</span>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-with-icon">
                        <span class="material-icons">lock</span>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                </div>

                <div class="forgot-password">
                    <a href="{{ Route::has('password.request') ? route('password.request') : '#' }}">Forgot Password?</a>
                </div>

                <button type="submit" class="auth-btn">
                    <span class="material-icons">login</span>
                    Login to Account
                </button>

                <div class="divider">OR</div>

                <div class="social-login">
                    <button type="button" class="social-btn">
                        <span style="color: #4285F4; font-size: 18px;">G</span>
                        Google
                    </button>
                    <button type="button" class="social-btn">
                        <span style="color: #1877F2; font-size: 18px;">f</span>
                        Facebook
                    </button>
                </div>
            </form>

            <!-- Register Form -->
            <form class="auth-form" id="registerForm" method="POST" action="{{ Route::has('register') ? route('register') : '#' }}">
                @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <div class="input-with-icon">
                        <span class="material-icons">person</span>
                        <input type="text" name="name" placeholder="Enter your full name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-with-icon">
                        <span class="material-icons">email</span>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="input-with-icon">
                        <span class="material-icons">lock</span>
                        <input type="password" name="password" placeholder="Create a password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <div class="input-with-icon">
                        <span class="material-icons">lock</span>
                        <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
                    </div>
                </div>

                <button type="submit" class="auth-btn">
                    <span class="material-icons">person_add</span>
                    Create Account
                </button>

                <div class="divider">OR</div>

                <div class="social-login">
                    <button type="button" class="social-btn">
                        <span style="color: #4285F4; font-size: 18px;">G</span>
                        Google
                    </button>
                    <button type="button" class="social-btn">
                        <span style="color: #1877F2; font-size: 18px;">f</span>
                        Facebook
                    </button>
                </div>
            </form>
        </div>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>About ShopZone</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Sustainability</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Returns & Refunds</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Policies</h3>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Accessibility</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Connect With Us</h3>
                    <div class="social-links">
                        <a href="#" class="social-icon">
                            <span class="material-icons">facebook</span>
                        </a>
                        <a href="#" class="social-icon">
                            <span class="material-icons">link</span>
                        </a>
                        <a href="#" class="social-icon">
                            <span class="material-icons">photo_camera</span>
                        </a>
                        <a href="#" class="social-icon">
                            <span class="material-icons">smart_display</span>
                        </a>
                    </div>
                    <div class="newsletter">
                        <h4>Subscribe to Newsletter</h4>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                <span class="material-icons">send</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="payment-methods">
                    <span>We Accept:</span>
                    <div class="payment-icons">
                        <span class="material-icons">credit_card</span>
                        <span class="material-icons">account_balance</span>
                        <span class="material-icons">payments</span>
                        <span class="material-icons">wallet</span>
                    </div>
                </div>
                <div class="footer-copyright">
                    <p>© 2024 ShopZone. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/shopzone.js') }}"></script>
    @stack('scripts')
</body>
</html>
