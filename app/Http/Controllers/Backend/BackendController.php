<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    /**
     * Index action
     */
    public function index()
    {
        $data = [
            'title' => 'Backend',
            'name'  => 'backend',
        ];

        return view('backend.index')->with($data);
    }
}
