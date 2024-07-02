<?php

namespace App\Livewire;

use App\Models\AllCare;
use Livewire\Component;

class Care extends Component
{

    public $care_name='';
    public $brand='';
    public $engine_capacity='';
    public $fuel_type='';

    function addcar(){
        $validated = $this->validate([ 
            'care_name' => 'required|min:3',
            'brand' => 'required|min:3',
            'engine_capacity' => 'required|min:3',
            'fuel_type' => 'required|min:3',
        ]);

        // AllCare::create($validated);
    }





    public function render()
    {
        return view('livewire.care');
    }
}
