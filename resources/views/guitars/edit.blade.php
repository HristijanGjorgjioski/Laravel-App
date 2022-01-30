@extends('layout')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    
    <form action="{{ route('guitars.update', ['guitar' => $guitar->id]) }}" method="POST" class="form bg-white p-6 border-1">
        @csrf
        @method('PUT')
        <input type="text" id="guitar-name" name="guitar-name" placeholder="guitar_name" value="{{ $guitar->name }}" />
        @error('guitar-name')
            <h6>{{ $message }}</h6>
        @enderror
        <input type="text" id="brand" name="brand" placeholder="Brand" value="{{ $guitar->brand }}" />
        @error('brand')
            <h6>{{ $message }}</h6>
        @enderror
        <input type="text" id="year" name="year" placeholder="Year" value="{{ $guitar->year_made }}" />
        @error('year')
            <h6>{{ $message }}</h6>
        @enderror
        <button type="submit">Submit</button>
    </form>

</div>

@endsection