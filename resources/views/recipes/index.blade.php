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
<div class="header text-center" style="background-color: #FFA500; width: 100%; padding: 10px 20px; border-radius: 0;">
    <img src="{{ asset('images/cook.png') }}" alt="Header" class="img-fluid mb-2" style="max-height: 60px; border-radius: 10px;">
    <h1 class="display-6 fw-bold" style="margin-bottom: 5px;">Selamat Datang di Dapur Ulala!</h1>
    <p class="lead" style="margin-bottom: 0;">Temukan inspirasi masakan lezat setiap hari</p>
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

        <!-- Masakan Populer -->
        <h2 class="text-center section-title">Masakan Populer</h2>
            <div class="row mb-5">
            @foreach(array_slice($recipes, 0, 3) as $recipe)
            <div class="col-md-4 mb-4">
            <div class="card shadow-sm" style="background-color: orange; border: none;">
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
<form method="GET" action="/" class="search-bar d-flex mb-5" style="max-width: 400px; margin: 0 auto;">
    <input type="text" name="search" class="form-control me-2" placeholder="Masukkan nama resep...">
    <button type="submit" class="btn btn-warning">
        <i class="fa fa-search"></i>
    </button>
</form>

<!-- Tambahkan Font Awesome di <head> kalau belum ada -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


        <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php foreach ($recipes as $recipe): ?>
        <div class="col">
            <div class="card h-100 d-flex flex-column">
                <img src="images/<?= $recipe['image']; ?>" class="card-img-top" alt="<?= $recipe['title']; ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $recipe['title']; ?></h5>
                    <p class="card-text"><?= $recipe['description']; ?></p>
                    <div class="mt-auto">
                        <a href="resep.php?id=<?= $recipe['id']; ?>" class="btn btn-warning w-100">Lihat Resep</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
