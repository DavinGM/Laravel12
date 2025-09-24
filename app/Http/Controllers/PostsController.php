<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $post = post::all();
        return view('halaman_post2', compact('post'));
    }
}
