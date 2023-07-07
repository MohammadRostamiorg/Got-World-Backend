<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Characters;

class CharactersController extends Controller
{
    function deleteCharacter($id){
        $Character = Characters::query()->find($id);
        $Character->delete();
        redirect()->back()->with(['status' => 200, "message" => 'character deleted']);
    }
}
    
