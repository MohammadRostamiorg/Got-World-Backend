<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Characters;
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
        return redirect('/panel/characters');
    }

    public function getAll(){ // for api
        $CharactersRepository = new CharactersRepositrory();
        $Characters = $CharactersRepository->getAll();
        return response($Characters , 200);
    }

    function deleteCharacter($id){
        $Character = Characters::query()->find($id);
        $Character->delete();
        return redirect()->back()->with(['status' => 200, "message" => 'character deleted']);
    }

    function editCharacter($id){
        $Character = Characters::query()->find($id);
        return view('Panel.characters.edit',compact('Character'));
    }



}
