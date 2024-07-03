<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Document Request</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('CSS/studentprofile.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <a href="{{ route('profile_etu') }}">Profile</a>
            <a href="{{ route('affichage') }}">Affichage</a>
            <a href="{{ route('logout') }}">Se déconnecter</a>
        </div>
        <div class="container-fluid">
            <div class="profile-container">
                <h3 class="text-center">Bienvenue à votre espace étudiant!</h3>
                <form action="{{ route('update-photo') }}" method="POST" enctype="multipart/form-data" class="mb-3">
                    @csrf
                    <div class="mb-3">
                        <div class="photo-preview mb-3" id="photo-preview" style="background-image: url('{{ asset($studentInformation->image) }}'); width: 150px; height: 150px; background-size: cover; border-radius: 50%;"></div>
                        <label for="upload-photo" class="custom-file-upload">Choisir une photo</label>
                        <input type="file" id="upload-photo" name="image" accept="image/*" onchange="previewImage(event)">
                    </div>
                    <button type="submit" class="btn btn-success">Changer</button>
                </form>
                <strong>Information Personnel</strong><br>
                NOM: {{ $studentInformation->name }}<br>
                PRÉNOM: {{ $studentInformation->prenom }}<br>
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
