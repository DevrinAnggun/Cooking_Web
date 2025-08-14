<?php

use Illuminate\Support\Facades\Route;

$recipes = [
    [
        'id' => 1,
        'title' => 'Nasi Goreng Spesial',
        'description' => 'Nasi goreng lezat dengan telur dan ayam.',
        'image' => 'nasgor.jpg',
        'tools' => [
            'Wajan',
            'Spatula',
            'Pisau',
            'Talenan',
            'Mangkuk'
        ],
        'ingredients' => [
            '2 piring nasi putih',
            '2 butir telur',
            '100 gram ayam suwir',
            '2 siung bawang putih (cincang)',
            '2 sdm kecap manis',
            '1 sdm minyak goreng',
            'Garam dan merica secukupnya'
        ],
        'steps' => [
            'Panaskan minyak di wajan.',
            'Tumis bawang putih hingga harum.',
            'Masukkan ayam suwir, aduk rata.',
            'Geser bahan ke pinggir wajan, masukkan telur, orak-arik.',
            'Masukkan nasi putih, aduk rata.',
            'Tambahkan kecap manis, garam, dan merica.',
            'Aduk hingga semua bahan tercampur rata dan matang.'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Soto Ayam',
        'description' => 'Soto ayam hangat dengan kuah gurih.',
        'image' => 'soto_ayam.jpg',
        'tools' => [
            'Panci besar',
            'Sutil sayur',
            'Pisau',
            'Talenan',
            'Blender atau ulekan'
        ],
        'ingredients' => [
            '500 gram ayam',
            '2 liter air',
            '3 lembar daun salam',
            '2 batang serai, memarkan',
            '4 siung bawang putih',
            '6 butir bawang merah',
            '2 cm kunyit, bakar',
            'Garam dan merica secukupnya'
        ],
        'steps' => [
            'Rebus ayam hingga matang, sisihkan.',
            'Tumis bumbu halus hingga harum.',
            'Masukkan tumisan ke dalam rebusan ayam.',
            'Tambahkan daun salam dan serai.',
            'Masak hingga kuah mendidih dan bumbu meresap.',
            'Sajikan dengan nasi, telur, dan sambal.'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Gado-Gado',
        'description' => 'Salad sayuran khas Indonesia dengan bumbu kacang.',
        'image' => 'gado-gado.jpg',
        'tools' => [
            'Panci untuk merebus',
            'Saringan sayur',
            'Pisau',
            'Talenan',
            'Cobek atau blender'
        ],
        'ingredients' => [
            '100 gram tauge',
            '100 gram kacang panjang, potong-potong',
            '100 gram kol, iris tipis',
            '2 buah kentang, rebus dan kupas',
            '1 buah timun, iris',
            '2 butir telur rebus',
            'Lontong atau nasi secukupnya',
            'Kerupuk untuk pelengkap',
            '200 gram kacang tanah goreng',
            '2 siung bawang putih',
            '5 buah cabai merah (opsional)',
            '2 sdm gula merah',
            '1 sdm air asam jawa',
            'Garam secukupnya'
        ],
        'steps' => [
            'Rebus semua sayuran hingga matang, tiriskan.',
            'Haluskan kacang tanah, bawang putih, cabai, gula merah, dan garam.',
            'Tambahkan air asam dan air matang hingga menjadi bumbu kacang kental.',
            'Susun sayuran, kentang, timun, dan telur di piring.',
            'Siram dengan bumbu kacang.',
            'Tambahkan kerupuk dan sajikan.'
        ]
    ],
    [
        'id' => 4,
        'title' => 'Mie Ayam',
        'description' => 'Mie ayam lezat dengan ayam berbumbu manis gurih.',
        'image' => 'mie_ayam.jpg',
        'tools' => [
            'Panci untuk merebus mie',
            'Wajan',
            'Spatula',
            'Pisau',
            'Talenan'
        ],
        'ingredients' => [
            '200 gram mie telur',
            '250 gram daging ayam fillet, potong kecil',
            '2 siung bawang putih, cincang',
            '2 sdm kecap manis',
            '1 sdm saus tiram',
            '1/2 sdt merica bubuk',
            '2 batang sawi hijau, potong',
            'Minyak goreng secukupnya',
            'Kaldu ayam secukupnya'
        ],
        'steps' => [
            'Rebus mie telur hingga matang, tiriskan.',
            'Rebus sawi sebentar, tiriskan.',
            'Panaskan minyak, tumis bawang putih hingga harum.',
            'Masukkan ayam, masak hingga berubah warna.',
            'Tambahkan kecap manis, saus tiram, merica, dan sedikit kaldu ayam.',
            'Aduk rata dan masak hingga bumbu meresap.',
            'Tata mie di mangkuk, beri ayam berbumbu dan sayur.',
            'Siram dengan kuah kaldu, sajikan hangat.'
        ]
    ]
];

Route::get('/', function () use ($recipes) {
    return view('recipes.index', ['recipes' => $recipes]);
});

Route::get('/resep/{id}', function ($id) use ($recipes) {
    $recipe = collect($recipes)->firstWhere('id', $id);

    if (!$recipe) {
        abort(404);
    }

    return view('detail', ['recipe' => $recipe]);
});

