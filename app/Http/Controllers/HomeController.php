<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data dummy
        $barang = [
            // Elektrik
            [
                'id' => 1,
                'nama' => 'Gitar Elektrik Ibanez',
                'harga' => 2000000,
                'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/91/MTA-127230354/brd-44261_gitar-elektrik-merk-ibanez-model-jem-flower-bonus-tas-dan-kabel-jack-listrik-murah-jakarta_full01-4c5445d2.jpg',
                'kategori' => 'Elektrik'
            ],
            [
                'id' => 2,
                'nama' => 'Gitar Elektrik Yamaha',
                'harga' => 2500000,
                'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-3696105/yamaha_yamaha-trbx174-gitar-bass-electric---hitam_full03.jpg',
                'kategori' => 'Elektrik'
            ],
            [
                'id' => 3,
                'nama' => 'Gitar Elektrik Fender',
                'harga' => 3000000,
                'gambar' => 'https://static-siplah.blibli.com/data/images/SBST-0024-00043/11367eed-e991-4cb0-b13c-759c2c5845e3.jpg',
                'kategori' => 'Elektrik'
            ],
            [
                'id' => 3,
                'nama' => 'Gitar Elektrik Fender',
                'harga' => 3000000,
                'gambar' => 'https://static-siplah.blibli.com/data/images/SBST-0024-00043/11367eed-e991-4cb0-b13c-759c2c5845e3.jpg',
                'kategori' => 'Elektrik'
            ],
            // Akustik
            [
                'id' => 4,
                'nama' => 'Gitar Akustik Yamaha',
                'harga' => 1500000,
                'gambar' => 'https://static-siplah.blibli.com/data/images/SBST-0024-00043/11367eed-e991-4cb0-b13c-759c2c5845e3.jpg',
                'kategori' => 'Akustik'
            ],
            [
                'id' => 5,
                'nama' => 'Gitar Akustik Fender',
                'harga' => 2000000,
                'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/91/MTA-127230354/brd-44261_gitar-elektrik-merk-ibanez-model-jem-flower-bonus-tas-dan-kabel-jack-listrik-murah-jakarta_full01-4c5445d2.jpg',
                'kategori' => 'Akustik'
            ],
            [
                'id' => 6,
                'nama' => 'Gitar Akustik Gibson',
                'harga' => 2500000,
                'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-3696105/yamaha_yamaha-trbx174-gitar-bass-electric---hitam_full03.jpg',
                'kategori' => 'Akustik'
            ],
            [
                'id' => 6,
                'nama' => 'Gitar Akustik Gibson',
                'harga' => 2500000,
                'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-3696105/yamaha_yamaha-trbx174-gitar-bass-electric---hitam_full03.jpg',
                'kategori' => 'Akustik'
            ],
            // Bass
            [
                'id' => 7,
                'nama' => 'Gitar Bass Ibanez',
                'harga' => 2000000,
                'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/91/MTA-127230354/brd-44261_gitar-elektrik-merk-ibanez-model-jem-flower-bonus-tas-dan-kabel-jack-listrik-murah-jakarta_full01-4c5445d2.jpg',
                'kategori' => 'Bass'
            ],
            [
                'id' => 8,
                'nama' => 'Gitar Bass Yamaha',
                'harga' => 2500000,
                'gambar' => 'https://static-siplah.blibli.com/data/images/SBST-0024-00043/11367eed-e991-4cb0-b13c-759c2c5845e3.jpg',
                'kategori' => 'Bass'
            ],
            [
                'id' => 9,
                'nama' => 'Gitar Bass Fender',
                'harga' => 3000000,
                'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-3696105/yamaha_yamaha-trbx174-gitar-bass-electric---hitam_full03.jpg',
                'kategori' => 'Bass'
            ],
            [
                'id' => 9,
                'nama' => 'Gitar Bass Fender',
                'harga' => 3000000,
                'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-3696105/yamaha_yamaha-trbx174-gitar-bass-electric---hitam_full03.jpg',
                'kategori' => 'Bass'
            ],
            // Aksesoris
            [
                'id' => 10,
                'nama' => 'Gitar Ibanez',
                'harga' => 2500000,
                'gambar' => 'https://www.sweelee.co.id/cdn/shop/products/products_2FI01-AEG7MH-OPN_2FI01-AEG7MH-OPN_1581489652420_600x600.jpg?v=1634630727',
                'kategori' => 'Aksesoris'
            ],
            [
                'id' => 10,
                'nama' => 'Gitar Ibanez',
                'harga' => 2500000,
                'gambar' => 'https://www.sweelee.co.id/cdn/shop/products/products_2FI01-AEG7MH-OPN_2FI01-AEG7MH-OPN_1581489652420_600x600.jpg?v=1634630727',
                'kategori' => 'Aksesoris'
            ],
            [
                'id' => 11,
                'nama' => 'Tuner Gitar',
                'harga' => 100000,
                'gambar' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-3146189/aroma_aroma-at-01a-tuner-gitar-dengan-clip---black_full05.jpg',
                'kategori' => 'Aksesoris'
            ],
            [
                'id' => 12,
                'nama' => 'Senar Gitar',
                'harga' => 50000,
                'gambar' => 'https://images.tokopedia.net/img/cache/500-square/product-1/2018/5/8/14332941/14332941_e9509cf5-a657-48e2-9f2c-6dc9d6ca80d2_1000_1000.jpg',
                'kategori' => 'Aksesoris'
            ]
        ];

        return view('home', compact('barang'));
    }
}
