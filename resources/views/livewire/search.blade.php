<div>
   
<input type="text" wire:model.live="search">
    <ul>
        @foreach ($cars as $car)
            <li wire:key="{{ $car->id }}">{{ $car->care_name }}</li>
        @endforeach
    </ul>
    
</div>
 