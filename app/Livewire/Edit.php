<?php

namespace App\Livewire;

use App\Models\AllCare;
use Livewire\Component;

class Edit extends Component
{



    public $id;
   
    public AllCare $Car_data;

    public $careId ='';
    public $care_name='';
    public $brand='';
    public $engine_capacity='';
    public $fuel_type='';
    

    // MOUNT FUNCTOIN DEA DATA initializes KORA HOI
    public function mount($id)
    {
        $this->Car_data = AllCare::where('id',$id)->first();

        $this->careId = $this->Car_data->id;
        $this->care_name = $this->Car_data->care_name;
        $this->brand = $this->Car_data->brand;
        $this->engine_capacity = $this->Car_data->engine_capacity;
        $this->fuel_type = $this->Car_data->fuel_type;



    }

// EDITE CAR




function edite(){
    $validated = $this->validate([ 
        'care_name' => 'required|min:3',
        'brand' => 'required|min:3',
        'engine_capacity' => 'required|min:3',
        'fuel_type' => 'required|min:3',
    ]);


    
    $allcare = AllCare::find($this->careId);
    // dd( $allcare);
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
       
       
        return view('livewire.edit');
    }




}
