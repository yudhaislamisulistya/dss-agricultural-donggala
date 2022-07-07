<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HasilPanenController extends BaseController
{
    public function index()
    {
        return view('collector/hasil-panen');
    }
}
