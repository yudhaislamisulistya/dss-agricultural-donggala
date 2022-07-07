<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PengepulController extends BaseController
{
    public function index()
    {
        return view('admin/data-pengepul');
    }
}
