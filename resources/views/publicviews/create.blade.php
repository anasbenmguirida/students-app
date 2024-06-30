<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="{{ url('CSS/connect.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('JS/create.js') }}" defer></script>
</head>
<body>
    <div class="d-flex">
        <div class="form-container">
            <p class="title">Créer un compte!</p>
            <form class="form" action="{{ route('save') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Nom</label>
                    <input type="text" name="name" id="username" >
                </div>
                <div class="input-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" >
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" >
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="input-group">
                    <label for="passwordc">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="passwordc">
                </div>
                <div id="mywidget" class="input-group"></div>
                <button type="submit" class="sign">Submit</button>
            </form>
        </div>
        <div class="image-container">
            <img src="/images/avatar.jpg" alt="Side Image">
        </div>
    </div>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>
</body>
</html>
