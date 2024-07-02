// resources/views/pdf_view.blade.php

<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Liste des étudiants</h2>
    <table>
        <thead>
            <tr>
                <th>Nom étudiant</th>
                <th>Présent</th>
                <th>Absent</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant['nom'] }} {{ $etudiant['prenom'] }}</td>
                <td>{{ $etudiant['present'] ? 'Oui' : 'Non' }}</td>
                <td>{{ $etudiant['absent'] ? 'Oui' : 'Non' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
