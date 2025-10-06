# MVC (Model-View-Controller)

## Table of Contents
- [MVC (Model-View-Controller)](#mvc-model-view-controller)
  - [Peran Komponen-Komponen MVC](#peran-komponen-komponen-mvc)
  - [Manfaat dari MVC](#manfaat-dari-mvc)
  - [Penggunaan MVC](#penggunaan-mvc)
  - [Kesimpulan](#kesimpulan)

---

MVC adalah sebuah pola desain arsitektur yang membagi kode aplikasi menjadi tiga bagian utama yang saling berhubungan:
- **Model** (mengelola data dan logika bisnis)
- **View** (menampilkan antarmuka pengguna)
- **Controller** (mengatur alur kerja dan hubungan antara Model dan View)

Pola ini bertujuan memisahkan tanggung jawab untuk menciptakan kode yang lebih terstruktur, efisien, mudah dikelola, dan memudahkan pengujian serta pemeliharaan aplikasi web dan perangkat lunak lainnya.

---

## Peran Komponen-Komponen MVC

**Model:**
- Bagian ini bertanggung jawab untuk mengelola data,
- mengambil data dari database, memanipulasinya,
- dan menerapkan logika bisnis aplikasi.

**View:**
- Komponen ini fokus pada tampilan data dan antarmuka pengguna (GUI).
- View bertugas menyajikan informasi kepada pengguna berdasarkan data yang diberikan oleh Model.

**Controller:**
- Controller berfungsi sebagai perantara yang mengontrol alur aplikasi.
- Ia menerima permintaan dari pengguna, memprosesnya, dan kemudian memilih Model yang sesuai untuk mengambil data,
- lalu memilih View yang tepat untuk menampilkan data tersebut.

---

## Manfaat dari MVC

- **Struktur Kode yang Lebih Baik:**
  - Dengan memisahkan kode menjadi tiga bagian,
  - aplikasi menjadi lebih terstruktur dan modular,
  - sehingga lebih mudah dipahami.
- **Efisiensi Pengembangan:**
  - Berbagai bagian dapat dikembangkan secara paralel,
  - misalnya bagian backend (Model dan Controller) dikerjakan oleh satu tim,
  - sementara bagian frontend (View) dikerjakan oleh tim lain.
- **Kemudahan Pengujian:**
  - Proses pengujian bisa dilakukan per bagian,
  - yang lebih mudah daripada menunggu seluruh aplikasi selesai.
- **Perawatan (Maintenance) yang Lebih Mudah:**
  - Kesalahan (bug) lebih mudah ditemukan dan diperbaiki karena setiap komponen memiliki tanggung jawab yang jelas.
- **Fleksibilitas:**
  - Memungkinkan perubahan pada tampilan (View) tanpa memengaruhi logika bisnis (Model), dan sebaliknya.

---

## Penggunaan MVC

Pola MVC banyak digunakan dalam framework pengembangan web populer seperti:
- Laravel
- CodeIgniter
- Symfony (PHP)

Serta dalam pengembangan aplikasi web dan mobile secara umum.

---

## Kesimpulan

Jadi **MVC** adalah sebuah metode yang bisa diterapkan di berbagai bahasa pemrograman dan MVC ini memisahkan antara tampilan data dan proses.

Kemudian si MVC ini dia akan memisahkannya menjadi **MVC**.

Analogi nya bisa seperti ini:
- **Model** = data
- **Controller** = Proses
- **View** = tampilan
