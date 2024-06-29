<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Document Request</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('CSS/studentprofile.css') }}">
    <style>
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #f8f9fa;
            padding-top: 20px;
            position: fixed;
        }
        .sidebar a {
            display: block;
            padding: 10px 15px;
            color: #000;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .container-fluid {
            margin-left: 220px;
            padding: 20px;
        }
        .photo-upload {
            margin: 20px 0;
        }
        .photo-preview {
            width: 150px;
            height: 150px;
            border: 2px solid #ddd;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            margin: 0 auto 10px;
        }
        .photo-upload input[type="file"] {
            display: none;
        }
        .photo-upload label {
            cursor: pointer;
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
        }
        .profile-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .document-request {
            margin-top: 30px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <a href="{{ route('affichage') }}">Affichage</a>
            <a href="{{ route('logout') }}">Se déconnecter</a>
        </div>
        <div class="container-fluid">
            <div class="profile-container">
                <h3 class="text-center">Welcome back to your profile</h3>
                <div class="photo-upload text-center">
                    <div class="photo-preview" id="photo-preview"></div>
                    <input type="file" id="upload-photo" name="upload-photo" accept="image/*" onchange="previewImage(event)">
                    <label for="upload-photo">Upload Photo</label>
                </div>
                <strong>Information Personnel</strong><br>
                NOM: {{ $studentInformation->name }}<br>
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
