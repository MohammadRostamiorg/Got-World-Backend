<?php

namespace App\Repositories;

use App\Models\Characters;
use Illuminate\Support\Facades\Storage;

class CharactersRepositrory
{
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
        $Charcater->save();
        $Charcater = Characters::query()->where('name' ,'='   , $characterInfo->name);
        if ($characterInfo->hasFile('pic')) {
//            dd($characterInfo);
            $image = $characterInfo->file('pic');
//            dd($image);

            // get image extension
            $extension = $image->getClientOriginalExtension();
            $imageName = "character.".time().$extension;
            var_dump($imageName);
            $path = Storage::putFileAs('characters',$image,$imageName);
//            $about->banner = "https://mohammadrostamidevdisk.storage.iran.liara.space/".$path;
        }


    }

    public function storeCharacterEdit($request)
    {
        self::storeCharacter($request, true);
    }

    public function getAll()
    {
        $Characters = Characters::all();
//        $Characters = $Characters->query()->all();
        return $Characters;
    }
}
