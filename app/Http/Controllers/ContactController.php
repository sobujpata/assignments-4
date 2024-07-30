<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        $datas = DB::table('contacts')
                ->get();
                // dd($datas);
        return view('index', compact('datas'));
    }
}
