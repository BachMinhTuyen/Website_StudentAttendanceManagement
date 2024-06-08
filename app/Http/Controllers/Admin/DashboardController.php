<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $subjects = DB::table('subject')
            ->get();
        return view("admin.dashboard", compact('subjects'));
    }
}
