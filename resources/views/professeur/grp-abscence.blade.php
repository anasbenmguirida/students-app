<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupe</title>
    <link rel="stylesheet" href="{{ url('CSS/insertion.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .d-flex {
            display: flex;
        }
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #343a40;
            padding: 15px;
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
        }
    </style>
</head>
<body>
<div class="d-flex">
    <div class="sidebar">
    <a href="{{ route('profile_prof') }}"><i class="fa-solid fa-user"></i> Profile</a>
        <a href="{{ route('selectGrp') }}"><i class="fa fa-pencil"></i> Insertion des notes</a>
        <a href="{{ route('grp-abscence') }}"><i class="fa fa-check"></i> Marquer la presence</a>
        <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Se déconnecter</a>
    </div>

    <div class="container mt-5">
        <form action="{{ route('get-students') }}" id="selectionForm" method="get">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Veuillez Selectionnez la filiere concerne !</label>
                <select class="form-control" id="exampleFormControlSelect1" name="filiere">
                    <option value="GRP1">GRP1</option>
                    <option value="GRP2">GRP2</option>
                    <option value="GRP3">GRP3</option>
                    <option value="GRP4">GRP4</option>
                    <option value="GRP5">GRP5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
