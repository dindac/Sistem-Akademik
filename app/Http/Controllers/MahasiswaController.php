<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    protected $request;

    public function __construct(Request $req)
    {
        $this->request = $req;
    }
    
}