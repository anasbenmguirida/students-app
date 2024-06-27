<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Document Request</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('CSS/studentprofile.css') }}">
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <a href="{{ route('affichage') }}">Affichage</a>
            <a href="{{ route('logout') }}">Se déconnecter</a>
        </div>
        <div class="container-fluid">
            <div class="profile-container">
                <h3>Welcome back to your profile</h3>
                <div class="photo-upload text-center">
                    <div class="photo-preview" id="photo-preview"></div>
                    <input type="file" id="upload-photo" name="upload-photo" accept="image/*" onchange="previewImage(event)">
                    <label for="upload-photo">Upload Photo</label>
                </div>
                <strong>Information Personnel</strong><br>
                NOM: {{ $studentInformation->nom }}<br>
                PRENOM: {{ $studentInformation->prenom }}<br>
                EMAIL: {{ $studentInformation->email }}
            </div>
            <div class="document-request">
                <h3>Demande de Documents</h3>
                <form method="post" action="{{ route('sendemail') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="attestation_scolarite" id="attestation_scolarite">
                            <label class="form-check-label" for="attestation_scolarite">Attestation de scolarité</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="carte_etudiant" id="carte_etudiant">
                            <label class="form-check-label" for="carte_etudiant">Carte d'étudiant</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="releve_notes" id="releve_notes">
                            <label class="form-check-label" for="releve_notes">Relevé de notes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="attestation_reussite" id="attestation_reussite">
                            <label class="form-check-label" for="attestation_reussite">Attestation de réussite</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
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
