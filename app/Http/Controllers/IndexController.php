<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $boards = Board::all();
        return view('index', ['boards' => $boards]);
    }

//    public function store(Request $request)
//    {
//        $user_uuid = \Illuminate\Support\Facades\Cookie::get('user_uuid');
//        $user_ip = $request->ip();
//
//        $cookie = Cookie::create([
//            'user_uuid' => $user_uuid ?? '',
//            'user_ip' => $user_ip ?? ''
//        ]);
//
//        return response()->json();
//    }
}
