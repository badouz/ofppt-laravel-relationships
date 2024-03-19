<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        div {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Ajouter Film</h2>

    <form action="{{ route('films.store') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label for="title" class="form-label">Titre:</label>
            <input type="text" class="form-control" name="title" required />
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Date de réalisation:</label>
            <input type="date" class="form-control" name="release_date" required />
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Catégorie:</label>
            <select class="form-select" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="director_id" class="form-label">Directeur:</label>
            <select class="form-select" name="director_id" required>
                @foreach($directors as $director)
                    <option value="{{ $director->id }}">{{ $director->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags:</label>
            <select class="form-select" name="tags[]" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Ajouter un film</button>
        </div>
    </form>
</div>


</body>
</html>
