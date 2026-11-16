<?php

use Illuminate\Support\Facades\Route;

$menus = [
    ['label' => 'Homepage', 'url' => '/', 'route' => 'home'],
    ['label' => 'Profil', 'url' => '/profil', 'route' => 'profil'],
    ['label' => 'Galeri Travel', 'url' => '/galeri', 'route' => 'galeri'],
];

$profil = [
    'nama' => 'Made Cetta Agraprana',
    'nim' => '2501010274',
    'jurusan' => 'IF AI',
    'hobi' => 'Traveler',
    'deskripsi' => 'Website personal berbasis Laravel dengan pemisahan header, footer, routing GET, serta pemanggilan data melalui variabel dan looping.',
];

// Slide 1: Homepage
Route::get('/', function () use ($menus, $profil) {
    return view('home', compact('menus', 'profil'));
})->name('home');

// Slide 2: Profil Diri
Route::get('/profil', function () use ($menus, $profil) {
    $biodata = [
        ['label' => 'Nama Lengkap', 'value' => $profil['nama']],
        ['label' => 'NIM', 'value' => $profil['nim']],
        ['label' => 'Jurusan', 'value' => $profil['jurusan']],
        ['label' => 'Hobby', 'value' => $profil['hobi']],
    ];

    return view('profil', compact('menus', 'profil', 'biodata'));
})->name('profil');

// Slide 3: Galeri Travel (4 Foto: Danau, Pantai, Savana, Gunung)
Route::get('/galeri', function () use ($menus, $profil) {
    $cariFoto = function ($namaFile) {
        foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
            if (file_exists(public_path("images/{$namaFile}.{$ext}"))) {
                return asset("images/{$namaFile}.{$ext}");
            }
        }
        return asset("images/{$namaFile}.jpg");
    };

    $fotos = [
        [
            'kategori' => '1. Danau',
            'judul' => 'Santai di Tepi Danau',
            'lokasi' => 'Danau Batur, Kintamani',
            'deskripsi' => 'Menikmati suasana cerah dan panorama danau yang tenang dari tepian.',
            'gambar' => $cariFoto('danau'),
        ],
        [
            'kategori' => '2. Pantai',
            'judul' => 'Senja di Tebing Pantai',
            'lokasi' => 'Pesisir Pantai Bali',
            'deskripsi' => 'Menikmati pemandangan laut dan langit senja dari atas tebing pantai.',
            'gambar' => $cariFoto('pantai'),
        ],
        [
            'kategori' => '3. Savana',
            'judul' => 'Hamparan Hijau Savana',
            'lokasi' => 'Padang Savana, Bali',
            'deskripsi' => 'Bersantai di tengah padang rumput hijau dengan latar megahnya gunung.',
            'gambar' => $cariFoto('savana'),
        ],
        [
            'kategori' => '4. Gunung',
            'judul' => 'Puncak Gunung Batur 1717 MDPL',
            'lokasi' => 'Gunung Batur, Bali',
            'deskripsi' => 'Momen pendakian berhasil mencapai puncak Gunung Batur di ketinggian 1717 MDPL.',
            'gambar' => $cariFoto('gunung'),
        ],
    ];

    return view('galeri', compact('menus', 'profil', 'fotos'));
})->name('galeri');