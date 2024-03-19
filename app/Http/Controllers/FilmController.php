<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Director;
use App\Models\Tag;
use App\Models\Film;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        $categories = Category::all();
        $directors = Director::all();
        $tags  = Tag::all();
        return view("films.create", compact('categories', 'directors', 'tags'));
    }

    public function store(Request $request)
    {
        $film = Film::create([
            'title' => $request->title,
            'description' => $request->description,
            'release_date' => $request->release_date,
            'director_id' => $request->director_id,
            'category_id' => $request->category_id,
            'image_url' => '',
        ]);

        $film->tags()->attach($request->tags);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('film_images', 'public');
            $film->update(['image_url' => $imagePath]);
        }

        return redirect()->route('films.index')->with('success', 'Film ajouté avec succès');
    }

    public function edit($id)
    {
        $film = Film::findOrFail($id);
        $categories = Category::all();
        $directors = Director::all();
        $tags = Tag::all();

        return view('films.edit', compact('film', 'categories', 'directors', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $film = Film::findOrFail($id);

        $film->update([
            'title' => $request->title,
            'description' => $request->description,
            'release_date' => $request->release_date,
            'director_id' => $request->director_id,
            'category_id' => $request->category_id,
        ]);

        if ($request->has('tags')) {
            $film->tags()->sync($request->tags);
        } else {
            $film->tags()->detach();
        }

        if ($request->hasFile('image')) {
            if ($film->image_url) {
                Storage::disk('public')->delete($film->image_url);
            }

            $imagePath = $request->file('image')->store('film_images', 'public');
            $film->update(['image_url' => $imagePath]);
        }

        return redirect()->route('films.index')->with('success', 'Film modifié avec succès.');
    }

    public function destroy($id)
    {
        $film = Film::findOrFail($id);

        if ($film->image_url) {
            Storage::disk('public')->delete($film->image_url);
        }

        $film->delete();

        return redirect()->route('films.index')->with('success', 'Film supprimé avec succès.');
    }
}
