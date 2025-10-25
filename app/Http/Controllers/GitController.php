<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GitController extends Controller
{

    public function index()
    {
        $response = Http::withoutVerifying()->get("https://api.github.com/repos/DavinGM/project_Davin/commits");
        $username = 'DavinGM'; // ganti dengan username GitHub kamu
        $repo = 'project_Davin'; // ganti dengan nama repo kamu

        // Panggil GitHub API tanpa token
        $response = Http::get("https://api.github.com/repos/{$username}/{$repo}/commits");

        $commits = collect($response->json())->map(function ($item) {
            return [
                'hash' => substr($item['sha'], 0, 7),
                'author' => $item['commit']['author']['name'] ?? 'Unknown',
                'date' => substr($item['commit']['author']['date'], 0, 10),
                'message' => $item['commit']['message'] ?? '(no message)',
            ];
        });

        return view('dashboard', compact('commits'));
    }

}
