<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation des notes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ddd;
            display: block;
        }

        .sidebar a:hover {
            color: #fff;
            background-color: #575d63;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="{{ route('profile_etu') }}">Profile</a>
        <a href="{{ route('affichage') }}">Affichage</a>
        <a href="{{ route('logout') }}">Se déconnecter</a>
    </div>

    <div class="content">
        <div class="container mt-5">
            <h2>Liste des Notes</h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Matière</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($GroupeEtudiants as $note)
                        <tr>
                            <td>{{ $note->libelle }}</td>
                            <td>{{ $note->note }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
