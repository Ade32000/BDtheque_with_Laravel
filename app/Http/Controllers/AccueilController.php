<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;


class AccueilController extends Controller
{
    public function show()
    {
        $comics = DB::table('comic')->get();
        return view('Accueil',compact('comics'));
    }

}









?>