<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Document Request</title>
    <link rel="stylesheet" href="{{ url('CSS/studentprofile.css') }}">
</head>
<body>
    <div class="sidebar">
        <a href="{{ route('affichage') }}">Affichage</a>
        <a href="{{ route('logout') }}">Se deconnecter</a>
    </div>
    <div class="container">
        <div class="profile-container">
            <h3>Welcome back to your profile</h3>
            <div class="photo-upload">
                <div class="photo-preview" id="photo-preview"></div>
                <label for="upload-photo">Upload Photo</label>
                <input type="file" id="upload-photo" name="upload-photo" accept="image/*" onchange="previewImage(event)">
            </div>
            <strong>Information Personnel</strong><br>
            NOM  : {{$studentInformation->nom}} <br>
            PRENOM :  {{$studentInformation->prenom}}<br>
            EMAIL : {{$studentInformation->email}}
        </div>
        <div class="document-request">
            <h3>Demande de Documents</h3>
            <form method="post" action="{{route('sendemail')}}">
                @csrf
                <div class="form-group">
                    <div>
                        <label>
                            <input type="checkbox" name="attestation_scolarite">
                            Attestation de scolarité
                        </label>
                        <label>
                            <input type="checkbox" name="carte_etudiant">
                            Carte d'étudiant
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" name="releve_notes">
                            Relevé de notes
                        </label>
                        <label>
                            <input type="checkbox" name="attestation_reussite">
                            Attestation de réussite
                        </label>
                    </div>
                </div>
                <button type="submit">Valider</button>
            </form>
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
