<?php
namespace App\Repositories;

use App\Models\Characters;
class CharactersRepositrory{
    public function storeCharacter($characterInfo){
        dd($characterInfo);
        $Charcater = new Characters();
        $Charcater->name = $characterInfo->name;
        $Charcater->father = $characterInfo->father;
        $Charcater->mohter = $characterInfo->mohter;
        $Charcater->house = $characterInfo->house;
        $Charcater->born = $characterInfo->born;
        $Charcater->died= $characterInfo->died;
        $Charcater->culture= $characterInfo->culture;
        $aliases = explode(',',$characterInfo->aliases);
        $aliases = json_encode($aliases);
        $Charcater->aliases= $aliases;
//        if ($)
//        $Charcater->IsFemale= $characterInfo->aliases;
//        $Charcater->save();
    }
}
