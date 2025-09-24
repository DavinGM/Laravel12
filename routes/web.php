<?php

// use App\Models\Post;
// use App\Models\siswa;
use App\Models\biodata;                                //model Biodata
use App\Http\Controllers\ArticleController;            //CTR Article
use App\Http\Controllers\PostsController;              //CTR Posts
use App\Http\Controllers\BioController;                //CTR Biodata
use Illuminate\Support\Facades\Route;                  //CTR Product
use App\Http\Controllers\ProductController;           



// ╔══════════════════════════════════╗
// ║ ||-- Welcome url{/welcome} --||  ║
// ╚══════════════════════════════════╝
Route::get('/', function () {
    
    return view('welcome');
});


// ╔══════════════════════════════════╗
// ║ ||-- Aboutme url{/aboutme} --||  ║
// ╚══════════════════════════════════╝
Route::get('/aboutme', function () {
    
    return view('utama');
});    


// ╔══════════════════════════════════╗
// ║ ||-- Biodata url{/Biodata} --||  ║
// ╚══════════════════════════════════╝
Route::get('/biodata', function () {

    $biodata = biodata::all();
    return $biodata;

    //     $bio = new biodata;
    //     $bio->nama_lengkap = "Nairha";
    //     $bio->jenis_kelamin = "perempuan";
    //     $bio->tanggal_lahir = "2008-09-15";
    //     $bio->tempat_lahir = "Jakarta";
    //     $bio->agama = "Islam";
    //     $bio->alamat = "Jl. Mawar No. 5, Jakarta";
    //     $bio->telepon = "081298765432";
    //     $bio->email = "siti.nairha@example.com";
    //     $bio->save();
    //     return $bio;

    
    });


// ╔══════════════════════════════════╗
// ║ ||-- Artikel url{/articles} --|| ║
// ╚══════════════════════════════════╝
Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);



// ╔══════════════════════════════════╗
// ║ ||-- Posts url{/postaja} --||    ║
// ╚══════════════════════════════════╝
Route::get('/postaja', [PostsController::class, 'index']);



// ╔══════════════════════════════════╗
// ║ ||-- Biodata url{/Bio} --||      ║
// ╚══════════════════════════════════╝
// CRUD full
Route::get('/bio', [BioController::class, 'index']); // Tabel + tambah data
Route::get('/bio/edit/{id}', [BioController::class, 'edit']); // Form update
Route::post('/bio', [BioController::class, 'store']); // Create
Route::put('/bio/{id}', [BioController::class, 'update']); // Update
Route::delete('/bio/{id}', [BioController::class, 'des']); // Delete


// ╔══════════════════════════════════╗
// ║ ||-- product url{/       } --||  ║
// ╚══════════════════════════════════╝
// Product CRUD
Route::get('/product', [ProductController::class, 'index']);      // Tabel + tambah data
Route::get('/product/edit/{id}', [ProductController::class, 'edit']); // Form update
Route::post('/product', [ProductController::class, 'store']);     // Create
Route::put('/product/{id}', [ProductController::class, 'update']); // Update
Route::delete('/product/{id}', [ProductController::class, 'destroy']); // Delete



// ╔═══════════════════════════════════════════╗
// ║ ||-- Home after Login url{/home} --||     ║
// ╚═══════════════════════════════════════════╝
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');











































// rotes utama 

// tampilan ini ada di folder view > backup
// Route::get('/halaman1', function () {
//     $siswa = ["davin", "kina","rehan","jala"];    
//     return view('tampilan1', compact('siswa'));
// });
// Route::get('/halaman2', function () {
//     $umur = ["10","11","12","20","21","11","11","12","22"];    
//     return view('tampilan2', compact('umur'));
// });
// Route::get('/halaman3', function () {
//     $hobi = ["mancing","mancing","mancing","mancing","mancing","mancing","mancing","mancing","mancing","mancing","mancing"];    
//         return view('tampilan3', compact('hobi'));
// });
// Route::get('/halaman4', function () {
//     return view('fahri', ['nama' => 'Kina']);    
// });

//about ada di backup
// Route::get('/about/{nama}/{tanggalLahir}/{JK}/{TL}/{alamat}/{agama}/{telepon}', 
//     function ($nama, $tanggalLahir, $JK, $TL, $alamat, $agama, $telepon) {
//         return "    
//             <h2>Ini Halaman About</h2><br>
//             Nama Lengkap : $nama <br>
//             Tanggal Lahir : $tanggalLahir <br>
//             Jenis Kelamin : $JK <br>
//             Tempat Lahir : $TL <br>
//             Alamat : $alamat <br>
//             Agama : $agama <br>
//             Telepon : $telepon
//         ";
// });
// Route::get('/profile', function () {
//     return '<h2>Ini Halaman Profile</h2>';    
// });

// Route::get('/hitung/{angka1}/{angka2}', function ($angka1, $angka2) {
//     $hasil = $angka1 + $angka2;    
//     return "
//         <h2>Ini hasil dari penjumlahan</h2><br>
//         Bilangan 1 = $angka1 <br>
//         Bilangan 2 = $angka2 <br>
//         Hasil = $hasil
//     ";
// });

// // Persegi
// Route::get('/persegi/{sisi1}/{sisi2}', function ($sisi1, $sisi2) {
//     $hasil = $sisi1 * $sisi2;    
//     return "
//         <h2>Ini halaman rumus persegi</h2><br>
//         Sisi 1 = $sisi1 <br>
//         Sisi 2 = $sisi2 <br>
//         Hasil = $hasil
//     ";
// });

// // Persegi Panjang
// Route::get('/persegi-panjang/{panjang}/{lebar}', function ($panjang, $lebar) {
//     $hasil = $panjang * $lebar;    
//     return "
//         <h2>Ini halaman rumus persegi panjang</h2><br>
//         Panjang = $panjang <br>
//         Lebar = $lebar <br>
//         Hasil = $hasil
//     ";
// });

// // Luas Segitiga
// Route::get('/luas-segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
//     $hasil = 0.5 * $alas * $tinggi;    
//     return "
//         <h2>Ini halaman rumus segitiga</h2><br>
//         Alas = $alas <br>
//         Tinggi = $tinggi <br>
//         Hasil = $hasil
//     ";
// });

// // Luas Lingkaran
// Route::get('/luas-lingkaran/{jarijari}', function ($jarijari) {
//     $hasil = 3.14 * $jarijari * $jarijari;    
//     return "
//         <h2>Ini halaman rumus lingkaran</h2><br>
//         Jari-jari = $jarijari <br>
//         Hasil = $hasil
//     ";
// });



// // Bone (Tugas)
// Route::get('/bone/{nama}/{JK}/{TB}/{jenis}/{menu}/{jumlah}', function ($nama, $JK, $TB, $jenis, $menu, $jumlah) {
//     $harga = 0;    
//     $diskon = 0;
//     $pesan = "data tidak ada";

//     // Logika harga
//     if ($jenis == "minuman") {
//         if ($menu == "kopi") {
//             $harga = 10000;    
//         } elseif ($menu == "jus") {
//             $harga = 15000;    
//         } elseif ($menu == "thai tea") {
//             $harga = 20000;    
//         }
//     } elseif ($jenis == "makanan") {
//         if ($menu == "seblak") {
//             $harga = 20000;    
//         } elseif ($menu == "pentol") {
//             $harga = 15000;    
//         } elseif ($menu == "batagor") {
//             $harga = 25000;    
//         }
//     }

//     // dikon
//     $subtotal = $harga * $jumlah;

//     if ($subtotal >= 50000) {
//         $diskon = $subtotal * 0.1;    
//         $total = $subtotal - $diskon;
//     } else {
//         $total = $subtotal;    
//     }

//     return "
//         <h2>Ini Halaman Bone</h2><br>
//         Nama : $nama <br>
//         Jenis Kelamin : $JK <br>
//         Tanggal Beli : $TB <br>
//         Jenis : $jenis <br>
//         Menu : $menu <br>
//         Jumlah : $jumlah <br>
//         Harga Satuan : $harga <br>
//         =====================================<br>
//         Subtotal : $subtotal <br>
//         Diskon : $diskon <br>
//         Total : $total
//     ";
// });


// Route::get('/siswa', function () {
    
//     $siswa = siswa::all();
//         return view('siswa', compact('siswa'));
    
//     });





Route::get('/post', function () {

    // //menambahkan data
    // $post = new Post;
    // $post->title ="menjadi orang jahat";
    // $post->content ="harus kaya Nairha";
    // $post->save();
    // return $post;
    
    
    //mengubah data 
    // $post = Post::find(1);
    // $post->content = "kina Whell";
    // $post->save();
    // return $post;

    //menampilkan
    //  return $post = Post::find(1);
    //return $post = Post::where('title','like', 'Tips cepat pintar')->get();
    // return view('post', compact('post'));

    //menghapus data
    // $post = Post::find(1);
    // $post->delete();
    // return $post;
});












