<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Riwayat Pembelajaran</title>
    <!-- Load Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Mengatur font default menjadi Inter */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f7fa; /* Latar belakang halaman */
        }
        /* Style untuk menu yang aktif */
        .sidebar-active {
            color: #ffffff !important;
            background-color: #059669 !important; /* Hijau Emerald 600 */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        }
        /* Scrollbar styling (aesthetic) */
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #d1d5db; /* gray-300 */
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background-color: #9ca3af; /* gray-400 */
        }
        
        /* Style untuk konten statis */
        .content-card {
            background-color: #ffffff;
            padding: 1.5rem;
            border-radius: 0.75rem; /* rounded-xl */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); /* shadow-lg */
        }
    </style>
</head>
<body>

<!-- afterall -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- endafterall -->





    <!-- Main Wrapper -->
    <div class="flex h-screen overflow-hidden">

        <!-- 1. Sidebar (4 Menu Navigasi) -->
        <div id="sidebar" class="fixed inset-y-0 left-0 z-30 w-64 bg-gray-800 text-white shadow-2xl transform -translate-x-full lg:translate-x-0 lg:static lg:inset-0 transition duration-300 ease-in-out custom-scrollbar overflow-y-auto">
            <div class="p-6 border-b border-gray-700">
                
                <h1 class="text-2xl font-bold text-red-600 hover:text-red-800"><i class="fa-brands fa-laravel"></i> Laravel 12</h1>
                <p class="text-xs text-gray-400 mt-1">Dashboard Home</p>
            </div>

            <!-- 4 Menu Utama -->
            <nav class="p-4 space-y-2">
                <a href="#" data-title="Riwayat Pembelajaran Utama" data-content-id="content-1"
                   class="sidebar-item flex items-center p-3 text-sm font-medium rounded-lg shadow-md transition duration-150 sidebar-active">
                    <i class="fas fa-graduation-cap mr-3"></i>
                    Riwatayat Pembelajaran
                </a>
                <a href="#" data-title="Daftar Proyek Aktif" data-content-id="content-2"
                   class="sidebar-item flex items-center p-3 text-sm font-medium text-gray-300 rounded-lg hover:bg-gray-700 transition duration-150">
                    <i class="fas fa-code-branch mr-3"></i>
                    GIT Branch aktive
                </a>
                <a href="#" data-title="Sertifikasi dan Ujian" data-content-id="content-3"
                   class="sidebar-item flex items-center p-3 text-sm font-medium text-gray-300 rounded-lg hover:bg-gray-700 transition duration-150">
                    <i class="fas fa-book mr-3"></i>
                    catatan
                </a>
                <a href="#" data-title="Catatan Singkat dan Ide" data-content-id="content-4"
                   class="sidebar-item flex items-center p-3 text-sm font-medium text-gray-300 rounded-lg hover:bg-gray-700 transition duration-150">
                    <i class="fas fa-pencil-alt mr-3"></i>
                    Menu 4: Catatan Singkat
                </a>
            </nav>
            
            <div class="mt-4 p-4 border-t border-gray-700">
                <a href="{{ route('logout') }}" class="flex items-center p-3 text-sm font-medium text-red-400 rounded-lg hover:bg-gray-700 transition duration-150"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <!-- user icon -->
                    <i class="fas fa-user mr-3"></i>
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Keluar
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </a>
            </div>
        </div>



            
        <!-- 2. Main Content Area -->
        <div class="flex-1 flex flex-col overflow-y-auto custom-scrollbar">

            <!-- 2.1. Header / Top Navbar -->
            <header class="flex items-center justify-between h-16 bg-white shadow-lg px-6 border-b border-gray-200 sticky top-0 z-10">
                <button id="sidebar-toggle" class="text-gray-500 hover:text-gray-700 lg:hidden focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                
                <nav class="text-sm font-medium text-gray-500 hidden sm:block">
                    <span id="breadcrumb-current-page" class="text-emerald-600"></span>
                </nav>

                <div class="flex items-center space-x-4">
                    <a href="https://github.com/DavinGM/Laravel12">
                        <button class=" w-8 h-8 flex items-center justify-center bg-gray-100 rounded-full text-gray-600 hover:bg-gray-200 hover:text-gray-800 transition duration-150">
                            <i class="fa-brands fa-github"></i>
                        </button>
                    </a>
                    <div class="flex items-center space-x-2 cursor-pointer">
                        <img class="w-8 h-8 rounded-full object-cover border-2 border-emerald-500" src="https://avatars.githubusercontent.com/u/228851591?v=4" alt="Foto Profil">
                    </div>
                </div>
            </header>

            <!-- 2.2. Main Content / Dashboard Items -->
            <main class="p-4 sm:p-6 flex-1">
                <h2 id="main-title" class="text-3xl font-bold text-gray-800 mb-6">Riwayat Pembelajaran</h2>

                <!-- ---------------------------------------------------- -->
                <!-- KONTEN 1: RIWAYAT UTAMA (Section 1) -->
                <!-- ---------------------------------------------------- -->
                <div id="content-1" class="content-panel">
                    <!-- Kartu Metrik Pembelajaran BARU (Menggunakan Gambar) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        
                        <!-- Kartu 1: Total Kursus Selesai -->
                        <div class="bg-white rounded-xl shadow-lg border-b-4 border-emerald-500 transition duration-300 hover:shadow-xl hover:shadow-emerald-200 overflow-hidden cursor-pointer">
                            <!-- Gambar -->
                            <img src="{{ asset('storage/biodata.png') }}" 
                                class="w-full h-28 object-cover" 
                                alt="Gambar Kursus Selesai">
                            
                            <div class="p-4">
                                <!-- Judul -->
                                <h3 class="text-xl font-bold text-gray-900 mb-1">Sistem Crud dengan Bio data </h3>
                                <!-- Desc -->
                                <p class="text-sm text-gray-500">Menggunakan metode CRUD dalam pembangunan nya  .</p>
                                
                                <!-- Tombol Klik -->
                                <a href="/bio">
                                    <button class="mt-3 text-sm font-semibold text-emerald-600 hover:text-emerald-800 flex items-center group">
                                        lihat halaman
                                        <i class="fas fa-arrow-right ml-2 text-xs transition duration-150 group-hover:translate-x-1"></i>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <!-- Kartu 2: Total Jam Belajar -->
                        <div class="bg-white rounded-xl shadow-lg border-b-4 border-indigo-500 transition duration-300 hover:shadow-xl hover:shadow-indigo-200 overflow-hidden cursor-pointer">
                            <!-- Gambar -->
                            <img src="{{ asset('storage/post.png') }}" 
                                class="w-full h-28 object-cover" 
                                alt="Gambar Total Jam">
                            
                            <div class="p-4">
                                <!-- Judul -->
                                <h3 class="text-xl font-bold text-gray-900 mb-1">Sistem Crud dengan Posts</h3>
                                <!-- Desc -->
                                <p class="text-sm text-gray-500">Pembelajaran sistem CRUD sederhana dengan study kausu data Posts.</p>
                                
                                <!-- Tombol Klik -->
                                <a href="/post">
                                    <button class="mt-3 text-sm font-semibold text-indigo-600 hover:text-indigo-800 flex items-center group">
                                        Lihat Halaman
                                        <i class="fas fa-arrow-right ml-2 text-xs transition duration-150 group-hover:translate-x-1"></i>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <!-- Kartu 3: Progres Keseluruhan -->
                        <div class="bg-white rounded-xl shadow-lg border-b-4 border-yellow-500 transition duration-300 hover:shadow-xl hover:shadow-yellow-200 overflow-hidden cursor-pointer">
                            <!-- Gambar -->
                            <img src=" {{ asset('storage/pengguna.png') }} " 
                                 class="w-full h-28 object-cover" 
                                 alt="Gambar Progres">
                            
                            <div class="p-4">
                                <!-- Judul -->
                                <h3 class="text-xl font-bold text-gray-900 mb-1">Sistem CRUD denagn Relasi data pengguna</h3>
                                <!-- Desc -->
                                <p class="text-sm text-gray-500">Praktik Nyata Sistem relasi .</p>
                                
                                <!-- Tombol Klik -->
                                <a href="/pengguna">
                                    <button class="mt-3 text-sm font-semibold text-yellow-600 hover:text-yellow-800 flex items-center group">
                                        lihat halaman
                                        <i class="fas fa-arrow-right ml-2 text-xs transition duration-150 group-hover:translate-x-1"></i>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <!-- Kartu 4: Proyek Aktif Saat Ini -->
                        <div class="bg-white rounded-xl shadow-lg border-b-4 border-red-500 transition duration-300 hover:shadow-xl hover:shadow-red-200 overflow-hidden cursor-pointer">
                            <!-- Gambar -->
                            <img src="https://phintraco-tech.com/wp-content/uploads/2023/03/artikel-06.png" 
                                class="w-full h-28 object-cover" 
                                alt="Gambar Proyek Aktif">
                            
                            <div class="p-4">
                                <!-- Judul -->
                                <h3 class="text-xl font-bold text-gray-900 mb-1">Authentikasi dengan data Pengguna</h3>
                                <!-- Desc -->
                                <p class="text-sm text-gray-500">Belajar Membuat Login Instant tanpa perlu Membuat dari 0.</p>
                                
                                <!-- Tombol Klik -->
                                <a href="/login">
                                    <button class="mt-3 text-sm font-semibold text-red-600 hover:text-red-800 flex items-center group">
                                        lihat halaman
                                        <i class="fas fa-arrow-right ml-2 text-xs transition duration-150 group-hover:translate-x-1"></i>
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                    
                    <div class="content-card">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Section 1: Detail Riwayat Pembelajaran</h3>
                        <p class="text-gray-600">Ini adalah konten utama untuk riwayat kursus dan progres Anda.</p>
                        <!-- Isi detail riwayat lainnya di sini -->
                    </div>
                </div>


                <!-- ---------------------------------------------------- -->
                <!-- KONTEN 2: PROYEK AKTIF (Section 2) -->
                <!-- ---------------------------------------------------- -->
                <div id="content-2" class="content-panel hidden">
                    <div class="content-card">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Section 2: Detail Proyek Aktif</h3>
                        <p class="text-gray-600">Anda dapat melihat daftar proyek yang sedang Anda kerjakan di sini, lengkap dengan tenggat waktu dan status.</p>
                        <ul class="list-disc ml-6 mt-4 text-gray-700 space-y-2">
                            <li>Proyek A: Aplikasi Chatbot (Status: 60%)</li>
                            <li>Proyek B: Situs Portofolio (Status: 90%)</li>
                            <li>Proyek C: Integrasi API (Status: 15%)</li>
                        </ul>
                    </div>
                </div>

                <!-- ---------------------------------------------------- -->
                <!-- KONTEN 3: SERTIFIKASI (Section 3) -->
                <!-- ---------------------------------------------------- -->
                <div id="content-3" class="content-panel hidden">
                    <div class="content-card">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Section 3: Daftar Sertifikasi dan Ujian</h3>
                        <p class="text-gray-600">Bagian ini menampilkan sertifikat yang sudah Anda peroleh dan ujian yang akan datang.</p>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div class="border p-4 rounded-lg bg-green-50">Sertifikat Web Dev Dasar (Lulus)</div>
                            <div class="border p-4 rounded-lg bg-yellow-50">Ujian Python Lanjut (Jadwal: 15 Nov)</div>
                        </div>
                    </div>
                </div>
                
                <!-- ---------------------------------------------------- -->
                <!-- KONTEN 4: CATATAN SINGKAT (Section 4) -->
                <!-- ---------------------------------------------------- -->
                <div id="content-4" class="content-panel hidden">
                    <div class="content-card">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Section 4: Catatan Singkat</h3>
                        <p class="text-gray-600">Area ini berisi ide-ide cepat, *snippet* kode, atau catatan belajar harian yang tidak formal.</p>
                        <textarea class="w-full mt-4 p-3 border rounded-lg h-32 focus:ring-emerald-500 focus:border-emerald-500 text-sm" placeholder="Tulis catatan Anda di sini..."></textarea>
                    </div>
                </div>

            </main>
        </div>

    </div>
    
    <!-- JavaScript Minimal untuk Navigasi UI -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('sidebar');
            const toggleButton = document.getElementById('sidebar-toggle');
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            const mainTitle = document.getElementById('main-title');
            const breadcrumb = document.getElementById('breadcrumb-current-page');
            const contentPanels = document.querySelectorAll('.content-panel');

            // 1. Toggle Sidebar (untuk mobile) - PURELY STYLE/UI
            toggleButton.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
            });

            // 2. Fungsi untuk mengupdate tampilan
            function updateView(item) {
                const newTitle = item.getAttribute('data-title');
                const targetContentId = item.getAttribute('data-content-id');
                
                // a. Perbarui Judul dan Breadcrumb (PURELY STYLE)
                mainTitle.textContent = newTitle;
                breadcrumb.textContent = item.textContent.replace(/Menu \d: /, '').trim(); // Menghilangkan "Menu X: "

                // b. Sembunyikan semua panel konten, lalu tampilkan yang target (PURELY VISIBILITY/STYLE)
                contentPanels.forEach(panel => {
                    if (panel.id === targetContentId) {
                        panel.classList.remove('hidden');
                    } else {
                        panel.classList.add('hidden');
                    }
                });

                // c. Kelola kelas aktif di sidebar (PURELY STYLE)
                sidebarItems.forEach(i => i.classList.remove('sidebar-active'));
                sidebarItems.forEach(i => i.classList.add('text-gray-300', 'hover:bg-gray-700'));
                item.classList.add('sidebar-active');
                item.classList.remove('text-gray-300', 'hover:bg-gray-700');

                // d. Tutup sidebar di mobile setelah klik
                if (window.innerWidth < 1024) {
                    sidebar.classList.add('-translate-x-full');
                }
            }


            // 3. Listener untuk item sidebar
            sidebarItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    e.preventDefault();
                    updateView(item);
                });
            });

            // 4. Inisialisasi tampilan awal
            const initialActiveItem = document.querySelector('.sidebar-item.sidebar-active');
            if (initialActiveItem) {
                updateView(initialActiveItem); 
            }
        });
    </script>
</body>
</html>
