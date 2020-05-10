<?php

namespace App\Http\Controllers\Admin;

use App\Sold;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SoldsController extends Controller
{
    public function index()
    {
        return view('admin/solds/index', ['solds' => Sold::orderBy('created_at', 'desc')->get()]);
    }
}
