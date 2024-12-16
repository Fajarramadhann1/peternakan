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
        return view('tpk.index');
    }
}
