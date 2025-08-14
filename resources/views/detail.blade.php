<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <a href="{{ url('/') }}" class="btn" style="background-color: orange; color: white;">← Kembali</a>

    <div class="text-center mb-4">
        <h1>{{ $recipe['title'] }}</h1>
        <img src="{{ asset('images/' . $recipe['image']) }}" alt="{{ $recipe['title'] }}" class="img-fluid rounded shadow" style="max-height: 300px;">
        <p class="mt-3 text-muted">{{ $recipe['description'] }}</p>
    </div>

    <h3>Bahan-bahan</h3>
    <ul>
        @foreach($recipe['ingredients'] as $ingredient)
            <li>{{ $ingredient }}</li>
        @endforeach
    </ul>

    <h3 class="mt-4">Langkah-langkah</h3>
    <ol>
        @foreach($recipe['steps'] as $step)
            <li>{{ $step }}</li>
        @endforeach
    </ol>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
