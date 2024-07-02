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

        $allcare = new AllCare;
        $allcare ->care_name = $this->care_name ;
        $allcare ->brand = $this->brand ;
        $allcare ->engine_capacity = $this->engine_capacity ;
        $allcare ->fuel_type = $this->fuel_type ;
        $allcare->save();

        session()->flash('status', 'Post successfully updated.');
        // AllCare::create($validated);
        $this->reset(); 

        return back();


    }





    public function render()
    {
        return view('livewire.care');
    }
}
