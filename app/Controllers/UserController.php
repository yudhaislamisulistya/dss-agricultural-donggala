<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function dashboard_admin()
    {
        return view('admin/dashboard');
    }
}
