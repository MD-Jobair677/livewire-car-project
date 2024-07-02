@extends('layout.layout')

@section('contant')

 {{-- <livewire:Edit :id="{{$editePost->id}}"/> --}}
 {{-- {{$editePost->id}} --}}
 {{-- @livewire('Edit'); --}}
{{-- {{$id}} --}}
 @livewire('Edit', ['id' => $id])

@endsection