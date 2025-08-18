@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $recipe['title'] }}</h2>
    <img src="{{ asset('images/' . $recipe['image']) }}" class="img-fluid mb-3" alt="{{ $recipe['title'] }}">
    <p>{{ $recipe['description'] }}</p>

    <h4>Bahan:</h4>
    <ul>
        @foreach($recipe['ingredients'] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <h4>Langkah:</h4>
    <ol>
        @foreach($recipe['steps'] as $step)
            <li>{{ $step }}</li>
        @endforeach
    </ol>
</div>
@endsection
