<?php

namespace App\Livewire;
use Livewire\WithoutUrlPagination;
use App\Models\AllCare;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAllCare extends Component
{

    use WithPagination, WithoutUrlPagination;

    


    function delete($id){
      AllCare::find($id)->delete();
      return redirect()->route('all-care')->with('success',' successfully delete');


    }


    public function render()
    {   
        $allCars = AllCare::paginate(5);
        return view('livewire.show-all-care',
        [
          'allCars'=>$allCars,  
        ]);
    }
}
