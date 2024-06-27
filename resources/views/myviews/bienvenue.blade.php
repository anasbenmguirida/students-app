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
        <nav class="navigation">
            
                <a href="#">Accueil</a>
                <a href="#a-propos">À propos</a>
                <a href="#contact">Contact</a>
            
        </nav>
    </header>
    <main>
    <section class="main" id="main">
      <div>
        <h2>
        simplifiez la gestion de vos documents<br> scolaire et affichages!
        </h2>

        <br />
        <a href="{{ route('login') }}" class="main-btn">Se connecter</a>
        <a href="{{ route('signup') }}" class="main-btn">S'inscrire</a>
      </section>
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
