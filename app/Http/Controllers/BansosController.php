<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Bantuan Sosial',
            'subtitle'  => 'Data Bantuan Sosial',
            'menu'      => 'bansos',
        ];

        return view('admin/bantuansosial/bansos', $data);
    }
}
