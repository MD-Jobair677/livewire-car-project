<div>
    
 <div class="col-md-6 m-auto">
    <h1>livewire</h1>
    <form wire:submit='addcar'>
  <div class="mb-3">
    <label for="carename" class="form-label">Care Name</label>
    <input  wire:model="care_name" type="email" class="form-control" id="carename"    placeholder="Enter Care Name" aria-describedby="emailHelp">

    <div class="text-danger">@error('care_name') {{ $message }} @enderror</div>
   
  </div>

  <div class="mb-3">
    <label for="brand" class="form-label">Brand</label>
    <input type="password" wire:model="brand" class="form-control" id="brand"  placeholder="Enter Care Brand" >
    <div class="text-danger">@error('brand') {{ $message }} @enderror</div>
  </div>

  <div class="mb-3">
    <label for="engine" class="form-label">Engine Capacity</label>
    <input type="password" wire:model="engine_capacity" class="form-control" id="engine"  placeholder="Enter Care Engine Capacity" >
    <div class="text-danger">@error('engine_capacity') {{ $message }} @enderror</div>
  </div>

  <div class="mb-3">
    <label for="fule" class="form-label">Fule Type</label>
    <input type="password" wire:model="fuel_type" class="form-control" id="fule"  placeholder="Enter Care Fule Name" >
    <div class="text-danger">@error('fuel_type') {{ $message }} @enderror</div>
  </div>

  

  
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
 
 
 </div>




</div>
