@extends('layout')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    
    <form action="{{ route('guitars.store') }}" method="POST" class="form bg-white p-6 border-1">
        @csrf
        <input type="text" id="guitar-name" name="guitar-name" placeholder="guitar_name" />
        <input type="text" id="brand" name="brand" placeholder="Brand" />
        <input type="text" id="year" name="year" placeholder="Year" />
        <button type="submit">Submit</button>
    </form>

</div>

@endsection