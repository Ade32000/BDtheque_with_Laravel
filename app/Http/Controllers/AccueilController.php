<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Image;


class AccueilController extends Controller
{
    public function show()
    {
        $comic = Comic::All();
        $image = Image::All();

        
        return view('BDtheque',compact('comic'), compact('image'));
    }

    public function fiche(){

        $comic = Comic::All();
        $image = Image::All();
        if(isset($_GET['imgId']))
        {

            $bd = Comic::where('comic_id', $_GET['imgId'])->get();

        }
        return view('/Fiche',compact('comic'), compact('image'), compact('bd'));
    }

}









?>