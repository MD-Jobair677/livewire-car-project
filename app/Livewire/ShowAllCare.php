<?php

namespace App\Livewire;
use Livewire\WithoutUrlPagination;
use App\Models\AllCare;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAllCare extends Component
{

    use WithPagination, WithoutUrlPagination;

    


    // function delete($id){
    //   AllCare::find($id)->delete();
    //   return redirect()->route('all-care')->with('success',' successfully delete');


    // }

    public $cars;

    protected $listeners = ['deleteConfirmed'];

    public function mount()
    {
        $this->cars = AllCare::all();
    }

    public function confirmDelete($id)
    {
        $this->dispatch('show-delete-confirmation', ['id' => $id]);
        
    }

    public function deleteConfirmed($id)
    {
        
        $car = AllCare::find($id);
        dd($car);
        if ($car) {
            $car->delete();
            $this->cars = AllCare::all(); 
        }
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
