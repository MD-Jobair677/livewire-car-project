<div>
    
 <div class="col-md-6 m-auto">
    <h1>livewire</h1>
    <form wire:submit='addcar'>
  <div class="mb-3">
    <label for="carename" class="form-label">Care Name</label>
    <input  wire:model="care_name" type="email" class="form-control" id="carename" aria-describedby="emailHelp">
   
  </div>

  <div class="mb-3">
    <label for="brand" class="form-label">Brand</label>
    <input type="password" wire:model="brand" class="form-control" id="brand">
  </div>

  <div class="mb-3">
    <label for="engine" class="form-label">Engine Capacity</label>
    <input type="password" wire:model="engine_capacity" class="form-control" id="engine">
  </div>

  <div class="mb-3">
    <label for="fule" class="form-label">Fule Type</label>
    <input type="password" wire:model="fuel_type" class="form-control" id="fule">
  </div>

  

  
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
 
 
 </div>




</div>
