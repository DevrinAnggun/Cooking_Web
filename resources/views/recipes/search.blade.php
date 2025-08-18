@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Hasil Pencarian: "{{ $query }}"</h3>

    @if(isset($message))
        <p class="text-danger">{{ $message }}</p>
    @endif

    <div class="row">
        @foreach($recipes as $recipe)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ $recipe->image }}" class="card-img-top" alt="{{ $recipe->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->name }}</h5>
                        <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
