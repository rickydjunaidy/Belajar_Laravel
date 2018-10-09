<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function produk()
    {
        return view('layouts/produk');
    }

    public function checkout()
    {
        return view('layouts/checkout');
    }

    public function profile()
    {
        return view('layouts/profile');
    }
}

