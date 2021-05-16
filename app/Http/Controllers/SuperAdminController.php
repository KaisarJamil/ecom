<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superadmin.dashboard');
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:Super_Admin');
    }

}
