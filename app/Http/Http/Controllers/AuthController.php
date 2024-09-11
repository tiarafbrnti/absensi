<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facedes\Auth;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        if(Auth::guard('karyawan')->attempt(['nip' => $request->nip, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            echo "Gagal Login";
        }
    }
}
