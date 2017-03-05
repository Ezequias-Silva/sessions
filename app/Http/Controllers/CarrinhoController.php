<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Produto;

class CarrinhoController extends Controller
{
    public function adiciona(Produto $produto){
      if(Session::has('produtos')){
        $produtos = Session::get('produtos');
        $produtos->put($produto->id,$produto);
        Session::put('produtos',$produtos);
      }
      else {
        $produtos = collect([$produto->id => $produto]);
        Session::put('produtos',$produtos);
      }
      Session::flash('mensagem','Produto adicionado ao carrinho');
      return redirect('/produtos');
    }
}
