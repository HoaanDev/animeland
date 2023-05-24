<?php

namespace App\Http\Controllers;
use App\Models\Anime;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterPage() {
        return view('pages.anime.anime_filter');
    }
     public function index()
    {
        
        $animes = Anime::paginate(4);
        return view('pages.anime.anime_filter', [
            'animes' => $animes,
            
        ]);
        
    }
    public function searchByDropdown(){
        //$animes=Anime::
    }
}
