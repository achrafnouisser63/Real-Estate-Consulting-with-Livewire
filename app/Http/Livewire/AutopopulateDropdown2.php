<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RealEstateType;
use App\Models\RealEstateBranch;

class AutopopulateDropdown2 extends Component
{
     public $types, $branches;

     public $selectedType = '';
     public $state_id = 0;
     public $city_id = 0;

     public function mount(){
          $this->types = RealEstateType::orderby('id','asc')
                             ->select('*')
                             ->get();
     }

     // Fetch states of a country
     public function getCountryStates(){

          $this->branches = RealEstateBranch::orderby('id','asc')
                          ->select('*')
                          ->where('real_estate_type_id',$this->selectedType)
                          ->get();

          // Reset values
          unset($this->branches);
          $this->selectedBranch = '';
     }

     // Fetch cities of a state
    //  public function getStateCities(){
    //       $this->cities = Cities::orderby('name','asc')
    //                       ->select('*')
    //                       ->where('state_id',$this->state_id)
    //                       ->get();

    //       // Reset value
    //       $this->city_id = 0;
    //  }

     public function render(){
          return view('livewire.autopopulate-dropdown2');
     }
}
