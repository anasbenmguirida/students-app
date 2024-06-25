<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Document Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        .profile-container {
            text-align: center;
            margin-bottom: 30px;
        }
        .profile-container h3 {
            margin: 20px 0;
            color: #333;
        }
        .profile-container .name,
        .profile-container .prenom {
            font-size: 1.2em;
            font-weight: bold;
        }
        .profile-container .label {
            font-weight: normal;
            color: #555;
        }
        .document-request {
            margin-top: 30px;
        }
        .document-request h3 {
            margin-bottom: 20px;
            color: #333;
        }
        .document-request label {
            display: block;
            margin-bottom: 10px;
        }
        .document-request input[type="checkbox"] {
            margin-right: 10px;
        }
        .document-request .form-group {
            margin-bottom: 20px;
        }
        .document-request .form-group div {
            margin-bottom: 10px;
        }
        .document-request button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .document-request button:hover {
            background-color: #0056b3;
        }
    </style>
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
            <button type="submit">Valider</button>
        </div>
    </div>
</body>
</html>
