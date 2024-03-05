<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Director;
use App\Models\Tag;
use App\Models\Film;
class FilmController extends Controller
{
    //
 // ici une 

    public function index(){
       $films = Film::all();
       return view ('films.index',compact('films'));   

    }


    // une fonction qui permet d'afficher un formaulaire pour ajouter un film

    public function create(){
       $categories = Category::all();
       $directors = Director::all();
        $tags  = Tag::all();
        return view("films.create",compact('categories','directors','tags'));
    }

    public function store(Request $request){
           

            $film = Film::create([
                'title' => $request->title,
                'description' => $request->description,
                'release_date'=> $request->release_date,
                'director_id' => $request->director_id,
                'category_id' => $request->category_id,
            ]);
            $film->tags()->attach($request->tags);
           return "Nous avon bien ajouter le film";
    }
}
