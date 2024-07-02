<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .d-flex {
            display: flex;
        }

        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #343a40;
            padding: 15px;
            position: fixed;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .container {
            flex: 1;
            padding: 20px;
            background: #fff;
            margin-left: 250px;
            margin-right: 250px;
            margin-bottom: 250px;
            
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .table th, .table td {
            padding: 15px;
            text-align: left;
            vertical-align: middle; /* Vertically centers the content */
        }

        .table th {
            background-color: skyblue;
        }

        .form-check-input {
            transform: scale(1.2);
        }

        .btn-submit {
            display: block;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="d-flex">
    <div class="sidebar">
        <a href="{{ route('selectGrp') }}"><i class="fa fa-pencil"></i> Insertion des notes</a>
        <a href="{{ route('grp-abscence') }}"><i class="fa fa-check"></i> Marquer la presence</a>
        <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Se déconnecter</a>
    </div>

    <div class="container">
        <h1>Liste des étudiants</h1>
        <form action="{{ route('submitForm') }}" method="post" >
            @csrf
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Nom étudiant</th>
                        <th>Présent</th>
                        <th>Absent</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($GroupeEtudiants as $etudiant)
                    <tr>
                        <td>{{ $etudiant->name }} {{ $etudiant->prenom }}</td>
                        <td><input type="checkbox" class="form-check-input student-checkbox"></td>
                        <td><input type="checkbox" class="form-check-input student-checkbox"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary btn-submit">Submit</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.student-checkbox');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    console.log(this.closest('tr').querySelector('td').innerText + ' checked');
                } else {
                    console.log(this.closest('tr').querySelector('td').innerText + ' unchecked');
                }
            });
        });
    });
</script>
</body>
</html>
