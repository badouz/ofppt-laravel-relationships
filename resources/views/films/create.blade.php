<style>
div{
    margin-bottom:5px;
}
 </style>
<div class="container">
    <h2>Ajouter Film</h2>


    <form action="{{ route('films.store') }}" method="post">
        @csrf 
        <div>
            <label for="title">Titre:</label>
            <input type="text" name="title" required />
        </div>
        <div>
            <label for="description">description:</label>
            <textarea type="text" name="description" required> </textarea>
        </div>
        <div>
            <label for="release_date">Date de reasliation:</label>
            <input type="date" name="release_date" required />
        </div>
        <div>
            <label for="category_id">Categorie:</label>
            <select name="category_id" required>
                @forEach($categories as $category)
                <option value="{{ $category->id }}" > {{ $category->name }} </option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="director_id">Directeur:</label>
            <select name="director_id" required>
                @forEach($directors as $director)
                <option value="{{ $director->id }}" > {{ $director->name }} </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="tags">Tags:</label>
            <select name="tags[]" multiple>
                @forEach($tags as $tag)
                <option value="{{ $tag->id }}" > {{ $tag->name }} </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit"> Ajouter un film </button>
        </div>

    </form>




</div>