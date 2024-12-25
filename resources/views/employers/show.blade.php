<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Employé</title>
</head>
<body>
    <h1>Détails de l'Employé</h1>
    <div>
        <strong>Prénom :</strong> {{ $employer->first_name }}
    </div>
    <div>
        <strong>Nom :</strong> {{ $employer->last_name }}
    </div>
    <div>
        <strong>Téléphone :</strong> {{ $employer->phone ? $employer->phone : 'Non renseigné' }}
    </div>
    <div>
        <strong>Poste :</strong> {{ $employer->position }}
    </div>
    <div>
        <strong>Salaire :</strong> {{ number_format($employer->salary, 2) }} €
    </div>

    <a href="{{ route('employers.index') }}">Retour à la liste</a>
</body>
</html>
