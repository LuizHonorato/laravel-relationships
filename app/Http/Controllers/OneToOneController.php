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

    public function oneToOneInverse(){
        $latitude = 456;
        $longitude = 654;

        $location = location::where('latitude', $latitude)
                            ->where('longitude', $longitude)
                            ->get()
                            ->first();
        $country = $location->country()->get()->first();
        echo $country->name;
    }

    public function oneToOneInsert(){
      $dataForm = [
          'name' => 'Alemanha',
          'latitude' => '890',
          'longitude' => '098',
      ];

      $country = Country::create($dataForm);

      $location = new Location();
      $location->latitude = $dataForm['latitude'];
      $location->longitude = $dataForm['longitude'];
      $location->country_id = $country->id;
      $saveLocation = $location->save();
    }

    
}
