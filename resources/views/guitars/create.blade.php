@extends('layout')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    
    <form action="{{ route('guitars.store') }}" method="POST" class="form bg-white p-6 border-1">
        @csrf
        <input type="text" id="guitar-name" name="guitar-name" placeholder="guitar_name" value="{{ old('guitar-name') }}" />
        @error('guitar-name')
            <h6>{{ $message }}</h6>
        @enderror
        <input type="text" id="brand" name="brand" placeholder="Brand" value="{{ old('brand') }}" />
        @error('brand')
            <h6>{{ $message }}</h6>
        @enderror
        <input type="text" id="year" name="year" placeholder="Year" value="{{ old('year') }}" />
        @error('year')
            <h6>{{ $message }}</h6>
        @enderror
        <button type="submit">Submit</button>
    </form>

</div>

@endsection