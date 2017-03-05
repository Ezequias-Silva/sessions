<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index(){
      $produtos = Produto::all();
      return view('produto.index',compact('produtos'));
    }
}
