<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Document Request</title>
    <link rel="stylesheet" href="{{ url('CSS/profprofile.css') }}">
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <a href="#">Insertion des notes</a>
            <a href="{{ route('presence') }}">Marquer la presence</a>
            <a href="{{ route('logout') }}">Se déconnecter</a>
        </div>
        <div class="container">
            <div class="profile-container">
                <h3>Welcome back to your profile</h3>
                <div class="photo-upload">
                    <div class="photo-preview" id="photo-preview"></div>
                    <label for="upload-photo" class="btn btn-primary">Upload Photo</label>
                    <input type="file" id="upload-photo" name="upload-photo" accept="image/*" onchange="previewImage(event)">
                </div>
                <strong>Information Personnel</strong><br>
                NOM: {{$profInformation->name}}<br>
                PRENOM: {{$profInformation->prenom}}<br>
                EMAIL: {{$profInformation->email}}
            </div>
        </div>
    </div>
    <script>
        function previewImage(event) {
            var file = event.target.files[0];
            if (file && file.type.startsWith('image/')) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('photo-preview');
                    output.style.backgroundImage = 'url(' + reader.result + ')';
                }
                reader.readAsDataURL(file);
            } else {
                alert('Please upload a valid image file.');
                event.target.value = ''; // Clear the input
            }
        }
    </script>
</body>
</html>
