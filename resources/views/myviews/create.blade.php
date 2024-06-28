<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="{{ url('CSS/connect.css') }}">
</head>
<body>
  
<div class="form-container">
	<p class="title">Créer un compte! </p>
	<form class="form"  action="{{route('save')}}" method="POST">
        @csrf
		<div class="input-group">
			<label for="username">Nom</label>
			<input type="text" name="name" id="username" >
		</div>
		<div class="input-group">
			<label for="Prenom">Prenom</label>
			<input type="text" name="prenom" id="prenom"><br>
        </div>
        <div class="input-group">
			<label for="email">Email</label>
			<input type="email" name="email" id="email"><br>
        </div>
        <div class="input-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password"><br>
        </div>
        <div class="input-group">
			<label for="passwordc">Confirm Password</label>
			<input type="password" name="password_confirmation" id="passwordc">
        </div>
        
        <div class="input-group">
          <div id="mywidget"></div>
        </div>
		<button type="submit" class="sign">Submit</button>
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
