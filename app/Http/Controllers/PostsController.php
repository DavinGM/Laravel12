<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    // hanya di pakai Pindah halman ada di dalam index.blade.php di tag link {{ route( 'post.create' ) }}
    public function create()
    {
    return view('post.create');   
    }



    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posts = new Post();
        $posts->title = $request->input('title');
        $posts->content = $request->input('content');
        $posts->save();

        session()->flash('success', 'Post created successfully.');
        return redirect()->route('post.index');

        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);

        // Post::create($request->all());
        // return redirect('/post')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('post.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $posts = Post::findOrFail($id);
        $posts->title = $request->input('title');
        $posts->content = $request->input('content');
        $posts->save();

        session()->flash('success', 'Post Berhasil di Update mwhehe.');
        return redirect()->route('post.index');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();

        session()->flash('success', 'Post Berhasill di Hapus mwhehe.');
        return redirect()->route('post.index');
    }

    public function show(string $id)
    {
        $posts = Post::findOrFail($id);
        return view('post.show', compact('posts'));

    }
}
