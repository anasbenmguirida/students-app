<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="{{ url('CSS/connect.css')}}">
</head>
<body>
  
<div class="form-container">
	<p class="title">Login</p>
	<form class="form"  action="{{route('connect')}}" method="POST">
        @csrf
		<div class="input-group">
			<label for="username">Email</label>
			<input type="email" name="email" id="username" >
		</div>
		<div class="input-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password"><br>
            <div id="mywidget"></div>
           
			<div class="forgot">
				<a rel="noopener noreferrer" href="#">Mot de passe oublié?</a>
			</div>

		</div>
		<button type="submit" class="sign">Login</button>
	</form>
	
	<p class="signup">Vous n'avez pas de compte?
		<a rel="noopener noreferrer" href="{{ route('signup') }}">Sign up</a>
	</p>
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
