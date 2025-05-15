<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function show($id)
    {
        $pembeli = Pembeli::find($id);

        $user = $pembeli->user;

        return view('pembeli.show', compact('pembeli', 'user'));
    }
}
