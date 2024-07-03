<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
        h2{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    
    <h2>Liste des présences</h2>
    <table>
        <thead>
            <tr>
                <th>Nom étudiant</th>
                <th>Présent</th>
                <th>Absent</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($GroupeEtudiants as $etudiant)
            <tr>
                <td>{{ $etudiant['name'] }} {{ $etudiant['prenom'] }}</td>
                <td>{{ isset($etudiant['present'])? ( $etudiant['present']? 'Oui' : '' ) : '' }}</td>            
                <td>{{ isset($etudiant['absent'])? ($etudiant['absent']? 'Oui' : '' ) : '' }}</td>       
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Meknes le : {{ date('d/m/Y ') }}</p>
</body>
</html>