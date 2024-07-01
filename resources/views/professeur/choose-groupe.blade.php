<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Dropdown Select</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <form action="{{ route('getstudentByGrp') }}" id="selectionForm" method="post" >
        @csrf
        @method('post')
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
