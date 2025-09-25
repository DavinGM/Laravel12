<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Product_JSON = product::all();

        return response()->json([
            'status' => 200,
            'success' => true,
            'message' => 'Procuts berhasil di Ambil',
            'data' => $Product_JSON,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
