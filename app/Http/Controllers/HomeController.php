<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recipe;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();

        return view('home', compact('recipes'));
    }

    public function show($recipe)
    {
        $recipe = Recipe::find($recipe);

        return view('recipe', compact('recipe'));
    }

    public function create()
    {
        return view('createRecipe');
    }

    public function add(Request $request)
    {

        $recipe = new Recipe;

        $recipe->title = $request->title;
        $recipe->subtitle = $request->subtitle;
        $recipe->steps = $request->steps;
        $recipe->ingredients = $request->ingredients;
        $recipe->time = $request->time;
        $recipe->persons = $request->persons;
        $recipe->image = $request->image;
        $recipe->users_id = Auth::user()->id;

        $recipe->save();

        return back();
    }
}
