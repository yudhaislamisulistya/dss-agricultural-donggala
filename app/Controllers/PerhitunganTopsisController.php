<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PerhitunganTopsisController extends BaseController
{
    public function index()
    {
        return view('admin/perhitungan-topsis');
    }
}
