<?php

namespace App\Http\Controllers;

use App\Models\instrutore;
use Illuminate\Http\Request;

class CadInstrutoresController extends Controller
{
   
    public function index(){

    $instrutures = instrutore::orderby('id', 'desc')->paginate();
    return view('painel-admin.instrutores.index', ['instrutures' => $instrutures]);

   }
}
