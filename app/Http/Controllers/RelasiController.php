<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Kasih tau ke Controler data apa aja yang mau di eksekusi
// panggil masing masing Model nya
use App\Models\Mahasiswa;         // MDL Mahasiswa
use App\Models\Wali;             // MDL Wali
use App\Models\Dosen;            // MDL Dosen
// data data dari Model ini di eksekusi di sini 



class RelasiController extends Controller
{

    // Deklarasikan Fungsi OneToOne = public function OneToOne() 
    public function OneToOne(){
        $mahasiswa = Mahasiswa::with('wali')->get();
        // Mahasiswa::with('wali')->get();  artinya (Eager Loading)
        // artinya Larav akan ambil data wali sekalian ambil data mahasiswa 
        // jadinya tidak memicu N+1 Query Probelm

        //get() → ambil semua record mahasiswa dari database.


        return view('relasi.one-to-one', compact('mahasiswa'));
    }


    public function OneToMany(){
        // Ambil data Dosen beserta Mahasiswa pembimbingnya
        $dosens = Dosen::with('mahasiswas')->get();
        return view('relasi.one_to_many', compact('dosens'));
    }
}
