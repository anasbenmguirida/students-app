<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Enseignant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ url('CSS/profprofile.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    <div class="d-flex">
        <nav class="sidebar bg-light border-right">
            <div class="list-group list-group-flush">
                <a href="{{ route('selectGrp') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-pencil-alt me-2"></i> Insertion des notes
                </a>
                <a href="{{ route('grp-abscence') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-user-check me-2"></i> Marquer la présence
                </a>
                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-sign-out-alt me-2"></i> Se déconnecter
                </a>
            </div>
        </nav>
        <div class="container p-4">
            <div class="profile-container">
                <h3>Welcome back to your profile</h3>
                <form action="{{ route('update-photo') }}" method="POST" enctype="multipart/form-data" class="mb-3">
                    @csrf
                    <div class="mb-3">
                        <div class="photo-preview mb-3" id="photo-preview" style="background-image: url('{{ asset($profInformation->image) }}'); width: 150px; height: 150px; background-size: cover; border-radius: 50%;"></div>
                        <label for="upload-photo" class="btn btn-primary">Upload Photo</label>
                        <input type="file" id="upload-photo" name="image" accept="image/*" class="form-control mt-2" onchange="previewImage(event)">
                    </div>
                    <button type="submit" class="btn btn-success">Save Photo</button>
                </form>
                <div>
                    <strong>Information Personnel</strong><br>
                    <p>NOM: {{ $profInformation->name }}</p>
                    <p>PRENOM: {{ $profInformation->prenom }}</p>
                    <p>EMAIL: {{ $profInformation->email }}</p>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
