<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    
    <link rel="stylesheet" href="{{ url('CSS/bienvenue.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="{{ url('images/image.png') }}" alt="Logo" style="width: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                <li class="nav-item"><a class="btn btn-outline-light" href="{{route('login')}}">Login</a></li>
                <li class="nav-item"><a class="btn btn-light ml-2" href="{{route('signup')}}">Register</a></li>
            </ul>
        </div>
    </nav>

    <header class="jumbotron jumbotron-fluid text-center" style="background-image: url('/images/prof.jpg');">
        <div class="container">
            <h1 class="display-4 text-white">Restez informé et connecté avec votre parcours académique</h1>
            <p class="lead text-white">Découvrez notre plateforme dès aujourd'hui!</p>
        </div>
    </header>

    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <p class="text-center">Notre plateforme en ligne simplifie l'inscription, la gestion des notes et le suivi des présences des étudiants. Facile à utiliser et sécurisée, elle permet aux étudiants et aux enseignants de gérer efficacement les aspects académiques essentiels</p>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <p class="text-center">Vous pouvez nous contacter en remplissant ce formulaire..</p>
            <form action="{{route('send-feedback')}}" method="POST" class="mt-4">
                @csrf
                <div class="form-group">
                    <label for="name">Nom Complet</label>
                    <input type="text" class="form-control" id="name" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="messages" rows="4" required></textarea>
                </div>
                <button type="submit" id="alert-button" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </section>
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session ("success") }}',
                    icon: 'success',
                    confirmButtonText: 'Cool'
                });
            });
        </script>
    @endif
    @if($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Error!',
                    html: '{!! implode('<br>', $errors->all()) !!}',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
