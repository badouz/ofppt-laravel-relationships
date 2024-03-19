<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
            padding: 20px;
        }

        .card {
            width: 48%;
            background: #fff;
            border: 1px solid #ced4da;
            border-radius: 8px;
            margin-top: 20px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            position: relative;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .description {
            margin-bottom: 15px;
        }

        .tag {
            border: 1px solid #ced4da;
            display: inline-block;
            padding: 10px;
            margin-top: 10px;
            margin-left: 10px;
            border-radius: 12px;
            background: #444;
            color: #eee;
        }

        .tags {
            margin-top: 15px;
        }

        .buttons {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .buttons a {
            margin-left: 10px;
        }

        .add-button {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <title>Liste des Films</title>
</head>
<body>

<h2 class="text-center mt-4">Liste des Films</h2>

<div class="container">
    @foreach($films as $film)
        <div class="card">
            <img src="/images/{{ $film->image }}" alt="{{ $film->title }}" class="text-center"/>
            <div class="title">{{ $film->title }}</div>
            <div class="subtitle">Date de réalisation: {{ $film->release_date }}</div>
            <div class="subtitle">Catégorie: {{ $film->category->name }}</div>
            <div class="description">{{ $film->description }}</div>

            <div class="tags">
                @foreach($film->tags as $tag)
                    <div class="tag">#{{ $tag->name }}</div>
                @endforeach
            </div>

            <div class="buttons">
                <a href="{{ route('films.edit', $film->id) }}" class="btn btn-warning">Modifier</a>
                <a href="{{ route('films.destroy', $film->id) }}" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    @endforeach
</div>

<div class="add-button">
    <a href="{{ route('films.create') }}" class="btn btn-primary">Ajouter un film</a>
</div>

</body>
</html>
