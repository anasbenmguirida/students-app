<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        input[type="checkbox"] {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des étudiants</h1>
        <table id="studentTable">
            <thead>
                <tr>
                    <th>Nom étudiant</th>
                    <th>Presence</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }} {{$etudiant->prenom}}</td>
                    <td><input type="checkbox" class="student-checkbox"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
