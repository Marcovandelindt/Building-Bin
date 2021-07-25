<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Index action
     */
    public function index()
    {
        $data = [
            'title' => 'Home',
            'name'  => 'home',
        ];

        return view('home.index')->with($data);
    }
}
