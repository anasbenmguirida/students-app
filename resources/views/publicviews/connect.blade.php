<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="{{ url('CSS/connect.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('JS/connect.js') }}" defer></script>
</head>
<body>
    <div class="d-flex">
        <div class="form-container">
            <p class="title">Login</p>
            <form class="form" action="{{ route('connect') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Email</label>
                    <input type="email" name="email" id="email" >
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div id="mywidget"></div>
                <div class="forgot">
                    <a href="{{ route('forget') }}">Mot de passe oublié?</a>
                </div>
                <button type="submit" class="sign">Login</button>
            </form>
            <p class="signup">Vous n'avez pas de compte? 
                <a href="{{ route('signup') }}">Sign up</a>
            </p>
        </div>
        <div class="image-container">
            <img src="/images/avatar.jpg" alt="Side Image">
        </div>
    </div>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>
</body>
</html>
