<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        session(['name' => 'name']);
        return redirect(url('admin/tour'));
    }
}
