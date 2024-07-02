<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Document Request</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('CSS/studentprofile.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ddd;
            display: block;
        }

        .sidebar a:hover {
            color: #fff;
            background-color: #575d63;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .profile-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .photo-upload input[type="file"] {
            display: none;
        }

        .photo-upload label {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .photo-preview {
            width: 150px;
            height: 150px;
            background-color: #ddd;
            border-radius: 50%;
            background-position: center;
            background-size: cover;
            margin-bottom: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <a href="{{ route('affichage') }}">Affichage</a>
            <a href="{{ route('logout') }}">Se déconnecter</a>
        </div>
        <div class="container-fluid content">
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
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session("success") }}',
                    icon: 'success',
                    confirmButtonText: 'Cool'
                });
            });
        </script>
    @endif
</body>
</html>
