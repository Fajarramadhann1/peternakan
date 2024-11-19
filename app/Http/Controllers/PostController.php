<?php

namespace App\Http\Controllers;

use App\Models\Post; // Ensure you import the Post model
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan halaman dengan data yang tersimpan
    public function index()
    {
        $posts = Post::all(); // Get all post data from the database
        return view('halaman_pakan', ['posts' => $posts]); // Ensure the view name matches
    }

    // Menambahkan post baru
    // Menambahkan post baru
public function createPost(Request $request)
{
    $incomingField = $request->validate([
        'pakan' => 'required|string',
        'stok' => 'required|integer|min:1|max:100', // Validasi stok antara 1 hingga 100
        'harga' => 'required|integer|min:1000|max:500000', // Validasi harga
    ]);

    Post::create([
        'title' => $incomingField['pakan'],
        'body' => 'Stok: ' . $incomingField['stok'],
        'harga' => $incomingField['harga'], // Simpan harga ke database
        'created_at' => now(),
    ]);

    return redirect('/pakan');
}

// Mengupdate post yang ada
public function actuallyUpdatePost(Post $post, Request $request)
{
    $incomingField = $request->validate([
        'title' => 'required|string',
        'body' => 'required|string',
        'harga' => 'required|integer|min:1000|max:500000', // Validasi harga
    ]);

    $post->update([
        'title' => $incomingField['title'],
        'body' => $incomingField['body'],
        'harga' => $incomingField['harga'], // Update harga
    ]);

    return redirect('/pakan');
}

public function deletePost(Post $post)
    {
        $post->delete();
        return redirect('/pakan'); // Redirect after deletion
    }

    // Menampilkan layar edit
    public function showEditScreen(Post $post)
    {
        return view('edit-post', ['post' => $post]);
    }
}
