<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General body styling */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header and Navigation styling */
        header {
            background: rgba(0, 0, 0, 0.7);
            padding: 1rem 0;
        }

        header nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        header nav ul li {
            margin: 0 1rem;
        }

        header nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }

        header nav ul li a:hover {
            color: #ffcc00;
        }

        /* Main content styling */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }

        main h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        main p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        main .buttons {
            display: flex;
            gap: 1rem;
        }

        main .buttons button {
            background: #ffa500;
            color: #000;
            border: none;
            padding: 1rem 2rem;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        main .buttons button:hover {
            background: #e69500;
        }

        main .buttons button a {
            text-decoration: none;
            color: inherit;
        }

        /* Section styling */
        section {
            padding: 2rem;
            text-align: center;
        }

        section h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        section p {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        /* Footer styling */
        footer {
            background: rgba(0, 0, 0, 0.7);
            text-align: center;
            padding: 1rem 0;
            font-size: 0.9rem;
        }

        footer p {
            margin: 0;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            main h1 {
                font-size: 2rem;
            }

            main p {
                font-size: 1rem;
            }

            section h2 {
                font-size: 2rem;
            }

            section p {
                font-size: 1rem;
            }
        }
    </style>
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
