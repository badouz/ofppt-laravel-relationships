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
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        select, input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Modifier Film</title>
</head>
<body>

<div class="container">
    <h2 class="mb-4">Modifier Film</h2>

    <form action="{{ route('films.update', $film->id) }}" method="post">
        @csrf 
        @method('PUT')

        <div>
            <label for="title">Titre:</label>
            <input type="text" name="title" class="form-control" value="{{ $film->title }}" required />
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea type="text" name="description" class="form-control" required>{{ $film->description }}</textarea>
        </div>
        <div>
            <label for="release_date">Date de réalisation:</label>
            <input type="date" name="release_date" class="form-control" value="{{ $film->release_date }}" required />
        </div>
        <div>
            <label for="category_id">Catégorie:</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $film->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="director_id">Directeur:</label>
            <select name="director_id" class="form-control" required>
                @foreach($directors as $director)
                    <option value="{{ $director->id }}" {{ $film->director_id == $director->id ? 'selected' : '' }}>
                        {{ $director->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="tags">Tags:</label>
            <select name="tags[]" class="form-control" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" {{ in_array($tag->id, $film->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" accept="image/*" />
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Modifier le film</button>
        </div>
    </form>
</div>

</body>
</html>
