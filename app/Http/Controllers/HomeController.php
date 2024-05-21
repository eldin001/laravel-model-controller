<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
class HomeController extends Controller
{
    public function index() {
        /* $database = env('DB_DATABASE');
        dd($database); */
        $movies = Movie::all();
        /* dd($movies); */
        return view ('home', compact('movies'));
    }
}
