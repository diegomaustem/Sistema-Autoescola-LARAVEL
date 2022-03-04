<?php

namespace App\Http\Controllers;

use App\Models\instrutore;
use Illuminate\Http\Request;

class CadInstrutoresController extends Controller
{
   
    public function index()
    {

    $instrutures = instrutore::orderby('id', 'desc')->paginate();
    return view('painel-admin.instrutores.index', ['instrutures' => $instrutures]);

   }

   public function create()
   {
       return view('painel-admin.instrutores.create');
   }

   public function insert(Request $request) 
   {
       $tabela = new Instrutore();
       $tabela->nome = $request->nome;
       $tabela->email = $request->email;
       $tabela->cpf = $request->cpf;
       $tabela->telefone = $request->telefone;
       $tabela->endereco = $request->endereco;
       $tabela->credencial = $request->credencial;
       $tabela->data_venc = $request->data;

       $itens = instrutore::where('cpf', '=', $tabela->cpf )->orwhere('credencial', '=', $tabela->credencial)->orwhere('email', '=', $tabela->email)->count();
       
       if($itens > 0){
           echo "<script language='javascript'> window.alert('Instrutor já existe na base de dados!') </script>";
           return view('painel-admin.instrutores.create');
       }

       $tabela->save();
       return redirect()->route('instrutores.index');
   }

   public function edit()
   {

   }

   public function update()
   {
       
   }
}
