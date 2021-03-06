<html>

<head>
    <title>Log In</title>
    <link href="{{ asset('css/login.scss') }}" rel="stylesheet" />
    <script src="{{ asset('js/login.js') }}"></script>
</head>
@if (isset($hasFailed))
<div style="color: red; margin: 10px;">Login fehlgeschlagen</div>
@endif
<h2>We like you, yes we do!</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="register.php">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="https://mail.google.com/mail/" class="social"><i><img src="icons/google.png"
                            style="height:25px" /></i></a>
                <a href="https://www.facebook.com/" class="social"><i><img src="icons/facebook.png"
                            style="height:25px" /></i></a>
                <a href="https://www.linkedin.com/" class="social"><i><img src="icons/linkedin.png"
                            style="height:25px" /></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Firstname" />
            <input type="text" placeholder="Lastname" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <button class="signup-button" type="submit">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="" method="post">
            @csrf
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="https://mail.google.com/mail/" class="social"><i><img src="icons/google.png"
                            style="height:25px" /></i></a>
                <a href="https://www.facebook.com/" class="social"><i><img src="icons/facebook.png"
                            style="height:25px" /></i></a>
                <a href="https://www.linkedin.com/" class="social"><i><img src="icons/linkedin.png"
                            style="height:25px" /></i></a>
            </div>
            <span>or use your account</span>
            <input id="login" type="text" placeholder="Enter Email or username" class="form-control" name="login"
                required>
            <input type="password" placeholder="Password" />
            <a href="#">Forgot your password?</a>
            <button class="signin-button" type="submit">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>
<footer>
    <p>yes</p>
</footer>
</body>

</html>