<?php
namespace App\Repositories;

use App\Models\Characters;
class CharactersRepositrory{
    public function storeCharacter($characterInfo){
//        dd($characterInfo);
        $Charcater = new Characters();
        $Charcater->name = $characterInfo->name;
        $Charcater->father = $characterInfo->father;
        $Charcater->mother = $characterInfo->mohter;
        $Charcater->house = $characterInfo->house;
        $Charcater->born = $characterInfo->born;
        $Charcater->died= $characterInfo->died;
        $Charcater->culture= $characterInfo->culture;
        $aliases = explode(',',$characterInfo->aliases);
        $aliases = json_encode($aliases);
        $Charcater->aliases= $aliases;
        if ($characterInfo->gender === "female"){
            $Charcater->IsFemale= true;
        }else{
            $Charcater->IsFemale= false;
        }

        $Charcater->save();
    }


    public function getAll()
    {
        $Characters = Characters::all();
//        $Characters = $Characters->query()->all();
        return $Characters;
    }
}
