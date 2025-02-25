<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Countries;
use App\Models\States;
use App\Models\Cities;
use App\Models\RealEstateType;
use App\Models\RealEstateBranch;

class AutopopulateDropdown extends Component
{
     public $countries, $states, $cities;

     public $country_id = 0;
     public $state_id = 0;
     public $city_id = 0;

     public $type_id = 0;
     public $branch_id = 0;
     public function mount(){
          $this->countries = Countries::orderby('name','asc')
                             ->select('*')
                             ->get();

          $this->types = RealEstateType::orderby('id','asc')
                             ->select('*')
                             ->get();


     }


     // Fetch states of a country
     public function getCountryStates(){

          $this->states = States::orderby('name','asc')
                          ->select('*')
                          ->where('country_id',$this->country_id)
                          ->get();

          // Reset values
          unset($this->cities);
          $this->state_id = 0;
          $this->city_id = 0;
     }

     // Fetch cities of a state
     public function getStateCities(){
          $this->cities = Cities::orderby('name','asc')
                          ->select('*')
                          ->where('state_id',$this->state_id)
                          ->get();

          // Reset value
          $this->city_id = 0;
     }

     public function getBranch(){
          $this->branches = RealEstateBranch::orderby('id','asc')
                          ->select('*')
                          ->where('type_id',$this->type_id)
                          ->get();
     }

     public function render(){
          return view('livewire.autopopulate-dropdown');
     }
}
