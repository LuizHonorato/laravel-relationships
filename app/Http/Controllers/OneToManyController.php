<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function oneToMany(){
        //$country = Country::where('name', 'Brasil')->get()->first();
        $keySearch = 'a';
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->get();
        foreach ($countries as $country) {

          echo "<b>{$country->name}</b>";

          $states = $country->states()->get();

          foreach ($states as $state) {
              echo "<br>{$state->initials} - {$state->name}";
          }
          echo '<hr>';
        }

    }

    public function manyToOne(){
        $stateName = 'Dusseldorf';
        $state = State::where('name', $stateName)->get()->first();
        echo "<b>{$state->name}</br>";

        $country = $state->country()->get()->first();
        echo "<br>País: {$country->name}";
    }
}