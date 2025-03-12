<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //    $data = [
        //    'nama' => 'Rafles Yuda',
        //    'pekerjaan' => 'Top Global Tharz',
        //];
        // return view('home')->with($data);

        $nama = "Rafles Yuda";
        $pekerjaan = "Top Global Tharz";
        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
