<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\support\Facades\Auth;
class DashboardController extends Controller
{
    public function dashboard(){
        
        if ( Gate::allows('admin-only', Auth::user())) {
        
            return view('dashboard');
        } else {
            return view('welcome');
        }
    }
}
