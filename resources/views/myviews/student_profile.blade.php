<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Document Request</title>
    <link rel="stylesheet" href="{{ url('CSS/studentprofile.css') }}">
   
</head>
<body>
    <div class="container">
        <div class="profile-container">
            <h3>Welcome back to your profile</h3>
            {{$studentInformation->nom}} {{$studentInformation->prenom}}
        </div>

        <div class="document-request">
            <h3>Demande de Documents</h3>
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
            <div class="form-group">
                <label>Documents scannés:</label>
                <ul>
                    <li><a href="#">Baccalauréat</a></li>
                    <li><a href="#">D.E.U.G</a></li>
                    <li><a href="#">Licence</a></li>
                </ul>
            </div>
            <form method="post" action="{{route('sendemail')}}">
                @csrf
            <button type="submit">Valider</button>
            </form>
            
        </div>
    </div>
</body>
</html>
