<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TPKController extends Controller
{
    /**
     * Display the TPK management page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Pastikan untuk mengembalikan view dengan nama yang sesuai
        return view('tpk'); // Mengarahkan ke TPK.blade.php
    }

    /**
     * Redirect to the Welcome page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function backToWelcome()
    {
        return redirect()->route('pakan');
    }
}
