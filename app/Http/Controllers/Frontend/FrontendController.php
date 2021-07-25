<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Index action
     */
    public function index()
    {
        $data = [
            'title' => 'Frontend',
            'name'  => 'frontend',
        ];

        return view('frontend.index')->with($data);
    }
}
