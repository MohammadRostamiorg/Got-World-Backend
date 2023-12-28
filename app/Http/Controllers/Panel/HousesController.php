<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\CharactersRepositrory;
use App\Repositories\HousesRepository;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    public function showAll(){ // for admin panel

        $HousesRepository = new HousesRepository();
        $Houses = $HousesRepository->getAll();
        return view('Panel.houses.all',compact('Houses'));

    }

    public function store(Request $request){
        $CharactersRepository = new CharactersRepositrory();
        $CharactersRepository->storeCharacter($request);
        return redirect('/panel/characters');
    }

}
