<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;

class LokerController extends Controller
{
    public function index()
    {
        $data = Loker::all();

        return view('loker.index', [
            'loker' => $data
        ]);
    }
}
