<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion des Notes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Insertion des Notes</h3>
    <form  action="{{route('store-grade')}}" method="post">
        @csrf
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                  
                    <th>Nom Etudiant</th>
                    <th>Prénom Etudiant</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach($GroupeEtudiants as $user)
                    <tr>
                        
                       
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>
                            <input type="number" name="notes[{{ $user->id }}]" class="form-control" min="0" max="20" step="0.1" required>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
