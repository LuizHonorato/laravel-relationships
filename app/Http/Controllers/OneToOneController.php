<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    public function oneToOne(){
        //$country = Country::find(1);
        $country = Country::where('name', 'China')->get()->first();
        echo $country->name;
        $location = $country->location;
        echo "<br>Latitude: {$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<br><hr>";
    }
}
