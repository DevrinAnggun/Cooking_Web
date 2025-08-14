<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            background: linear-gradient(135deg, #ff7f50, #ffb347);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .intro {
            padding: 40px 20px;
            background-color: #fef8f0;
            text-align: center;
        }
        .section-title {
            color: #2e7d32;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .search-bar {
            max-width: 400px;
            margin: 0 auto 30px auto;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <img src="{{ asset('images/cook.png') }}" alt="Header" class="img-fluid mb-3" style="max-height: 80px; border-radius: 10px;">
        <h1 class="display-4 fw-bold">Selamat Datang di Recipes!</h1>
        <p class="lead">Temukan inspirasi masakan lezat setiap hari</p>
    </div>

    <!-- Kata Pengantar -->
    <div class="intro">
        <p class="fs-8">
            Masakan adalah seni yang menggabungkan rasa, aroma, dan penampilan.
            Di sini, Anda akan menemukan berbagai resep mulai dari hidangan sederhana hingga istimewa.
            Mari kita jelajahi dunia kuliner bersama!
        </p>
    </div>

    <div class="container py-5">

        <!-- Contoh Masakan -->
        <h2 class="text-center section-title">Contoh Masakan Populer</h2>
        <div class="row mb-5">
            @foreach(array_slice($recipes, 0, 3) as $recipe)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/' . $recipe['image']) }}" class="card-img-top" alt="{{ $recipe['title'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $recipe['title'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pencarian -->
        <h2 class="text-center section-title">Cari Resep Masakan</h2>
        <form method="GET" action="/" class="search-bar">
            <input type="text" name="search" class="form-control" placeholder="Masukkan nama resep...">
        </form>

        <!-- Semua Resep -->
        <div class="row mt-4">
            @foreach($recipes as $recipe)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{{ asset('images/' . $recipe['image']) }}" class="card-img-top" alt="{{ $recipe['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe['title'] }}</h5>
                            <p class="card-text">{{ $recipe['description'] }}</p>
                            <a href="{{ url('/resep/' . $recipe['id']) }}" class="btn btn-success w-100">Lihat Resep</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
