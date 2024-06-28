<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('CSS/bienvenue.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/images/image.png" alt="Logo" style="width: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                <li class="nav-item"><a class="btn btn-outline-success" href="{{route('login')}}">Login</a></li>
                <li class="nav-item"><a class="btn btn-success ml-2" href="{{route('signup')}}">Register</a></li>
            </ul>
        </div>
    </nav>

    <header class="jumbotron jumbotron-fluid text-center" style="background-image: url('/images/school.jpg');">
        <div class="container">
            <h1 class="display-4">Restez informé et connecté avec votre parcours académique</h1>
            <p class="lead">Découvrez notre plateforme dès aujourd'hui!</p>
        </div>
    </header>

    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <p class="text-center">Information about the platform, its mission, vision, and what it offers to students.</p>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <p class="text-center">Details on how to get in touch with the platform's support team or administration.</p>
            <form action="/send-email" method="POST" class="mt-4">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
