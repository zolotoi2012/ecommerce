<?php

namespace App\Http\Controllers\Admin;

use App\Sold;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SoldsController extends Controller
{
    public function index()
    {
        return view('admin/solds/index', ['solds' => Sold::all()]);
    }

    public function show(Sold $sold)
    {
        return view('admin/solds/show', ['sold' => Sold::find($sold->id)]);
    }
}
