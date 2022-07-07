<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KriteriaController extends BaseController
{
    public function index()
    {
        return view('admin/data-kriteria');
    }
}
