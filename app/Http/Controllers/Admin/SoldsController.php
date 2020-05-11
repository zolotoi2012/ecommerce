<?php

namespace App\Http\Controllers\Admin;

use App\Sold;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SoldsController extends Controller
{
    public function index()
    {
        return view('admin/solds/index', ['solds' => Sold::orderBy('create_at', 'desc')->get()]);
    }

    public function day()
    {
        $solds = Sold::where('create_at', '=', date('Y-m-d'))
            ->where('status_id', '=', 1)
            ->get();
        return view('admin/solds/day', ['solds' => $solds]);
    }

    public function month()
    {
        $startDate = date('Y-m') . '-01';
        $solds = Sold::where('create_at', '<=', date('Y-m-d'))
                    ->where('create_at', '>=', $startDate)
                    ->where('status_id', '=', 1)
                    ->get();

        return view('admin/solds/month', ['solds' => $solds]);
    }
}
