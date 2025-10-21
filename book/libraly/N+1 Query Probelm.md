**N+1 Query Problem** adalah masalah performa umum dalam pengembangan aplikasi yang berinteraksi dengan *database*, terutama saat menggunakan alat **Object-Relational Mapping (ORM)**. Masalah ini menyebabkan aplikasi mengeksekusi sejumlah *query* database yang berlebihan, yang secara signifikan dapat memperlambat performa.

Secara sederhana, masalah ini dijelaskan dengan formula: **1 + N * query***.

### Penjelasan Detil

Masalah N+1 terjadi ketika:

1.  **1 Query Awal (The '1'):** Aplikasi menjalankan satu *query* utama untuk mengambil daftar item utama (*parent records*).
2.  **N Query Tambahan (The 'N'):** Untuk setiap item (sebanyak N) yang didapatkan dari *query* utama tersebut, aplikasi kemudian menjalankan *query* tambahan **terpisah** untuk mengambil data relasi (*child records*) yang terkait dengan item tersebut.

**Total *query* yang dijalankan adalah 1 (untuk daftar utama) + N (untuk data relasi dari setiap item) = N+1 *query*.**

#### Contoh Ilustrasi

Bayangkan Anda ingin menampilkan daftar 100 **Pengguna** (*User*) beserta **Alamat** (*Address*) mereka, di mana setiap pengguna memiliki satu alamat:

* **Query 1 (Awal):** `SELECT * FROM users;` (Mengambil 100 pengguna)
* **Query N (Tambahan):** Aplikasi kemudian mengulang (looping) di 100 pengguna ini dan menjalankan *query* untuk setiap alamat:
    * `SELECT * FROM addresses WHERE user_id = 1;`
    * `SELECT * FROM addresses WHERE user_id = 2;`
    * ...
    * `SELECT * FROM addresses WHERE user_id = 100;`

**Total *query* yang dijalankan adalah 1 + 100 = 101 *query*!** Padahal, semua data tersebut seharusnya dapat diambil dalam 1 atau 2 *query* yang efisien.

### Mengapa Ini Buruk? (Dampak)

Meskipun setiap *query* tambahan (N *query*) mungkin berjalan cepat, jumlah *query* yang banyak secara keseluruhan menimbulkan dampak negatif:

1.  **Latensi (Waktu Tunggu) Tinggi:** Setiap *query* membutuhkan perjalanan bolak-balik (round trip) dari aplikasi ke *database*. Semakin banyak *query* yang dieksekusi, semakin lama waktu tunda kumulatif yang menyebabkan respons aplikasi menjadi lambat.
2.  **Beban Database Berat:** Jumlah *query* yang masif (meskipun kecil-kecil) dapat membebani server *database*, terutama pada aplikasi dengan volume trafik tinggi.
3.  **Penggunaan Sumber Daya Tidak Efisien:** Server aplikasi dan *database* membuang waktu lebih banyak untuk *overhead* komunikasi daripada untuk memproses data aktual.

### Solusi Umum

Solusi utama untuk mengatasi N+1 Query Problem adalah menggunakan teknik **Eager Loading** (pemuatan data secara langsung) alih-alih **Lazy Loading** (pemuatan data saat dibutuhkan) yang sering menjadi penyebab masalah.

Metode umum untuk *eager loading* meliputi:

* **JOINs:** Menggunakan perintah `JOIN` (seperti `LEFT JOIN` atau `INNER JOIN`) dalam satu *query* SQL untuk mengambil data dari tabel utama dan tabel relasi secara bersamaan.
* **Batch Fetching (Pemuatan *Batch*):** Mengambil semua ID relasi (misalnya 100 *user\_id*) dan kemudian menjalankan satu *query* untuk mengambil semua data relasi (*address*) sekaligus: `SELECT * FROM addresses WHERE user_id IN (1, 2, ..., 100);`