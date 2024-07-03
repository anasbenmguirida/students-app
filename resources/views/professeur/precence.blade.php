<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('CSS/precence.css')}}">
</head>
<body>
<div class="d-flex">
    <div class="sidebar">
        <a href="{{ route('profile_prof') }}"><i class="fa-solid fa-user"></i> Profile</a>
        <a href="{{ route('selectGrp') }}"><i class="fa fa-pencil"></i> Insertion des notes</a>
        <a href="{{ route('grp-abscence') }}"><i class="fa fa-check"></i> Marquer la présence</a>
        <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Se déconnecter</a>
    </div>

    <div class="container">
    
        <h1>Liste des présences : {{$selectedFiliere}}</h1>
        <form action="{{ route('generate-PDF') }}" method="post" id="attendance-form">
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
                <td><input type="checkbox" class="form-check-input student-checkbox" name="GroupeEtudiants[{{ $loop->index }}][present]" value="1"></td>
                <td><input type="checkbox" class="form-check-input student-checkbox" name="GroupeEtudiants[{{ $loop->index }}][absent]" value="1"></td>
                <input type="hidden" name="GroupeEtudiants[{{ $loop->index }}][name]" value="{{ $etudiant->name }}">
                <input type="hidden" name="GroupeEtudiants[{{ $loop->index }}][prenom]" value="{{ $etudiant->prenom }}">
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
