<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AlternatifController extends BaseController
{
    public function index()
    {
        return view('admin/data-alternatif');
    }
}
