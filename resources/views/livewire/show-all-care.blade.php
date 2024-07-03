<div class="col-md-8 m-auto">
<h1> All Cars </h1>
@if(session('success'))
    <div class=" alert alert-success"> {{session('success')}}</div>
@endif

@livewire('search')




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
     

 <td>
                    <i class="fa-solid fa-trash" wire:click="confirmDelete({{ $allcar->id }})" style="cursor: pointer;"></i>
                </td>
     
     
    </tr>
  @empty
      
  @endforelse
   
   
  </tbody>
</table>
 {{ $allCars->links() }}

 <button id="delete"> delete</button>
</div>


@push('customjs')




     <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.addEventListener('show-delete-confirmation', function(event) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('deleteConfirmed', event.detail.id);
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                    }
                });
            });
        });
    </script>










    <script>
       
   $(document).ready(function(){
    $('#delete').click(function(){
   
Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
  }
});
    })
   })
    </script>
  
@endpush