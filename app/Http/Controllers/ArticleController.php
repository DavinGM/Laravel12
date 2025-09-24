<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // tampilkan semua artikel
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }








    // simpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Article::create($request->all());
        return redirect('/articles')->with('success', 'Artikel berhasil ditambahkan!');
    }


    
    // hapus artikel
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('/articles')->with('success', 'Artikel berhasil dihapus!');
    }

    
}
