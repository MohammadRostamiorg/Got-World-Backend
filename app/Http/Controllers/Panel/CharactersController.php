<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CharactersRepositrory;
class CharactersController extends Controller
{
    public function showAll(){ // for admin panel
        $CharactersRepository = new CharactersRepositrory();
        $Characters = $CharactersRepository->getAll();
        return view('Panel.characters.all',compact('Characters'));
    }

    public function store(Request $request){
        $CharactersRepository = new CharactersRepositrory();
        $CharactersRepository->storeCharacter($request);
    }

    public function getAll(){ // for api
        $CharactersRepository = new CharactersRepositrory();
        $Characters = $CharactersRepository->getAll();
        return response($Characters , 200);
    }

}
