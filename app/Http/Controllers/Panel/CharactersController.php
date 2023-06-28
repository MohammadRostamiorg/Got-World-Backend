<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CharactersRepositrory;
class CharactersController extends Controller
{
    public function store(Request $request){
        $CharactersRepository = new CharactersRepositrory();
        $CharactersRepository->storeCharacter($request);
    }

    public function getAll(){
        $CharactersRepository = new CharactersRepositrory();
        $CharactersRepository = $CharactersRepository->getAll();
        return response($CharactersRepository, 200);
    }
}
