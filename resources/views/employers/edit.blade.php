<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Employé</title>
</head>
<body>
    <h1>Modifier les Informations de l'Employé</h1>

    <form action="{{ route('employers.update', $employer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="first_name">Prénom :</label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $employer->first_name) }}" required>
        </div>
        <div>
            <label for="last_name">Nom :</label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $employer->last_name) }}" required>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $employer->phone) }}">
        </div>
        <div>
            <label for="position">Poste :</label>
            <input type="text" name="position" id="position" value="{{ old('position', $employer->position) }}" required>
        </div>
        <div>
            <label for="salary">Salaire :</label>
            <input type="number" name="salary" id="salary" value="{{ old('salary', $employer->salary) }}" required step="0.01">
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>
