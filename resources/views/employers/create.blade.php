<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Employé</title>
</head>
<body>
    <h1>Ajouter un Nouvel Employé</h1>

    <form action="{{ route('employers.store') }}" method="POST">
        @csrf
        <div>
            <label for="first_name">Prénom :</label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required>
        </div>
        <div>
            <label for="last_name">Nom :</label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
        </div>
        <div>
            <label for="position">Poste :</label>
            <input type="text" name="position" id="position" value="{{ old('position') }}" required>
        </div>
        <div>
            <label for="salary">Salaire :</label>
            <input type="number" name="salary" id="salary" value="{{ old('salary') }}" required step="0.01">
        </div>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
