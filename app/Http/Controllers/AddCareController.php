<?php

namespace App\Http\Controllers;

use App\Models\AllCare;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class AddCareController extends Controller
{

  

    
    function addCare(){
        return view('addCare');
    }

    // SHOW ALL POST

    function allCare(){

  
     
        return view('All-Car');
    }

    // EDITE CARE

    public $idd='';


    function editCare($id){
    //    dd($id);
        return view('edite_Post',compact('id'));

    }



}
