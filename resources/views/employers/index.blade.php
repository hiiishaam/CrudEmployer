<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés</title>
</head>
<body>
    <h1>Liste des Employés</h1>
    <a href="{{ route('employers.create') }}">Ajouter un Employé</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Poste</th>
                <th>Salaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employers as $employer)
                <tr>
                    <td>{{ $employer->id }}</td>
                    <td>{{ $employer->first_name }} {{ $employer->last_name }}</td>
                    <td>{{ $employer->position }}</td>
                    <td>{{ number_format($employer->salary, 2) }} €</td>
                    <td>
                        <a href="{{ route('employers.show', $employer->id) }}">Afficher</a>
                        <a href="{{ route('employers.edit', $employer->id) }}">Modifier</a>
                        <form action="{{ route('employers.destroy', $employer->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
