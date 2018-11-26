<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Image;
use App\Category;
use App\Author;
use App\Editor;


class AccueilController extends Controller
{
    public function show()
    {
        $comic = Comic::All();
        $image = Image::All();

        return view('BDtheque',
        [
            'comic' => $comic,
            'image' => $image
        ]);
        // return view('BDtheque',compact('comic'), compact('image'));
    }

    private function findId(){

    }
    
    public function fiche(){

        if(isset($_GET['imgId']))
        {
            $image = Image::where('fk_comic', $_GET['imgId'])->get();
            $bd = Comic::where('comic_id', $_GET['imgId'])->get();
            // $cat = Comic::where('comic_id', $_GET['imgId'])->select('fk_category')->get();
            // var_dump($cat->fk_category);
            // $aut = Comic::where('comic_id', $_GET['imgId'])->select('fk_author')->get();
            // $edit = Comic::where('comic_id', $_GET['imgId'])->select('fk_editor')->get();
            // $category = Category::where('category_id', $cat)->get();
            // $author = Author::where('author_id', $aut)->get();
            // $editor = Editor::where('editor_id', $edit)->get();

        }
        return view('Fiche',
        [
            'image' => $image,
            'bd' => $bd
            // 'category' => $category,
            // 'author' => $author,
            // 'editor' => $editor
        ]);
    }

}









?>