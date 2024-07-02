<div>
 
 <div class="col-md-6 m-auto">
    <h1>livewire </h1>
    <h1>Edite Car </h1>
  @if(session('status'))
  <h1> {{session('status')}} </h1>
    
  @endif

    <form wire:submit='edite'>
  <div class="mb-3">
    <label for="carename" class="form-label">Care Name</label>
    <input  wire:model="care_name" type="text" class="form-control" id="carename" value="{{$care_name}}"   placeholder="Enter Care Name" aria-describedby="emailHelp">

    <div class="text-danger">@error('care_name') {{ $message }} @enderror</div>
   
  </div>

  <div class="mb-3">
    <label for="brand" class="form-label">Brand</label>
    <input type="text" wire:model="brand" class="form-control" id="brand" value="{{$brand}}" placeholder="Enter Care Brand" >
    <div class="text-danger">@error('brand') {{ $message }} @enderror</div>
  </div>

  <div class="mb-3">
    <label for="engine" class="form-label">Engine Capacity</label>
    <input type="text" wire:model="engine_capacity" class="form-control" id="engine" value="{{$engine_capacity}}"  placeholder="Enter Care Engine Capacity" >
    <div class="text-danger">@error('engine_capacity') {{ $message }} @enderror</div>
  </div>

  <div class="mb-3">
    <label for="fule" class="form-label">Fule Type</label>
    <input type="text" wire:model="fuel_type" class="form-control" id="fule"  value="{{$fuel_type}}" placeholder="Enter Care Fule Name" >
    <div class="text-danger">@error('fuel_type') {{ $message }} @enderror</div>
  </div>

  

  
  

  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('all-care')}}"  class="btn btn-primary">All Post</a>
</form>
 
 
 
 </div>
