<?php

namespace App\Livewire;

use App\Models\AllCare;
use Livewire\Component;

class Search extends Component
{


    public $search = '';


    public function render()
    {

        $car = AllCare::where('care_name', 'like', '%'.$this->search.'%')->get();
        return view('livewire.search',[
            'cars' =>$car,    
        ]);
        
    }
}
