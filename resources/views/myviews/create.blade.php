<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
    <link rel="stylesheet" href="{{ url('CSS/create.css') }}">
    
</head>
<body>
    <div class="form-container">
        <form action="{{route('save')}}" method="POST">
            @csrf
            <div class="form-group">
                <h3>Creer votre compte ! </h3>
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="password_confirmation" required>
            </div>
            <div id="mywidget"></div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>
<script>
   window.onloadTurnstileCallback = function () {
    turnstile.render('#mywidget', {
        sitekey: '0x4AAAAAAAcPqi00a6QZbAZd',
        callback: function(token) {
            console.log(`Challenge Success ${token}`);
        },
    });
}; 
</script>
</body>
</html>
