<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des films</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Liste des films</h2>
    @foreach($films as $film)
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Titre : {{$film->title}}</h3>
                <h5>Date de réalisation : {{$film->release_date}}</h5>
                <h4>Catégorie : {{$film->category->name}}</h4>
                <p class="card-text">Description : {{$film->description}}</p>
                <div class="tags">
                    @foreach($film->tags as $tag)
                        <span class="badge badge-secondary">#{{$tag->name}}</span>
                    @endforeach
                </div>
                <div class="action-buttons">
                    <a href="{{ route('film.edit', ['id' => $film->id]) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('film.destroy', ['id' => $film->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce film ?')">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>
