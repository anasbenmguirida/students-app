<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="{{ url('CSS/bienvenue.css') }}" rel="stylesheet" >

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#a-propos">À propos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Bienvenue sur notre plateforme</h1>
        <p>Cette plateforme est destinée aux étudiants pour gérer leurs informations.</p>
        <div class="buttons">
            <button><a href="{{ route('login') }}">Se connecter</a></button>
            <button><a href="{{ route('signup') }}">S'inscrire</a></button>
        </div>
    </main>
    <section id="a-propos">
        <h2>À propos</h2>
        <p>Notre plateforme offre des outils pour aider les étudiants à gérer leurs informations académiques de manière efficace.</p>
        <p>Nous nous engageons à fournir les meilleurs services pour faciliter la gestion des tâches administratives et académiques.</p>
    </section>
    <section id="contact">
        <h2>Contact</h2>
        <p>Pour toute question ou assistance, veuillez nous contacter via les moyens suivants:</p>
        <p>Email: support@notreplateforme.com</p>
        <p>Téléphone: +33 1 23 45 67 89</p>
    </section>
    <footer>
        <p>&copy; 2023 - Tous droits réservés</p>
    </footer>
</body>
</html>
