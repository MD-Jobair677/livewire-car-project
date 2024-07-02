<div class="col-md-8 m-auto">
<h1> All Cars </h1>
@if(session('success'))
    <div class=" alert alert-success"> {{session('success')}}</div>
@endif


<table  class="table  ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Care Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Engine Capacity</th>
      <th scope="col">Fule Type</th>
      <th scope="col" class=" ">Edite</th>
      <th scope="col" class="">Delete</th>
    </tr>
  </thead>
  <tbody>

  @forelse ($allCars as $key=>$allcar )
       <tr>
      <th scope="row"> {{$allCars->firstItem()+$key}} </th>
      <td>{{$allcar->care_name}}</td>
      <td>{{$allcar->brand}}</td>
      <td>{{$allcar->engine_capacity}}</td>
      <td>{{$allcar->fuel_type}}</td>
      <td> <a href="{{route('edit-care',$allcar->id)}}"><i class="fa-solid fa-pen-to-square" ></i></a>  </td>
      <td><i class="fa-solid fa-trash" wire:click='delete({{$allcar->id}})'></i></td>
      <button
    type="button"
    wire:click="delete"
    wire:confirm="Are you sure you want to delete this post?"
>
    Delete post 
</button>
     
    </tr>
  @empty
      
  @endforelse
   
   
  </tbody>
</table>
 {{ $allCars->links() }}
</div>
