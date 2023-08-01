<?php

namespace App\Repositories;

use App\Models\Characters;
use App\Models\Houses;
use Illuminate\Support\Facades\Storage;

class HousesRepository
{
    public function getAll()
    {
     $Houses = Houses::all();
     return $Houses;
    }


    public function storeCharacter($characterInfo, $isEdit = false)
    {

        if ($isEdit) {
            $Charcater = Characters::query()->find($characterInfo->id);
        } else {

            $Charcater = new Characters();
        }

        $Charcater->name = $characterInfo->name;
        $Charcater->father = $characterInfo->father;
        $Charcater->mother = $characterInfo->mother;
        $Charcater->house = $characterInfo->house;
        $Charcater->born = $characterInfo->born;
        $Charcater->died = $characterInfo->died;
        $Charcater->culture = $characterInfo->culture;
        $aliases = explode(',', $characterInfo->aliases);
        $aliases = json_encode($aliases);
        $Charcater->aliases = $aliases;
        $children = explode(',', $characterInfo->children);
        $children = json_encode($children);
        $Charcater->children = $children;
        if ($characterInfo->gender === "female") {
            $Charcater->IsFemale = true;
        } else {
            $Charcater->IsFemale = false;
        }

        if ($characterInfo->hasFile('pic')) {
            $image = $characterInfo->file('pic');
            $extension = $image->getClientOriginalExtension();
            $imageName = "Character".  time() . rand(100,999).  ".".$extension;
            $path = Storage::putFileAs('characters',$image,$imageName);
            $Charcater->pic = "https://gotworld.storage.iran.liara.space/".$path;
        }
        $Charcater->save();


    }
}
