<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\clientes;
use DateTime;

class clienteController extends Controller
{
    
//========================================================
// funções relacionadas as views

    //função para mostrar index 
    public function index(){

        $dados = DB::table('clientes')
        ->oldest()
        ->get();

        return view('welcome', compact('dados'));
    }

    //mostra o formulario de cadastro
    public function novoCliente(){
        return view('/inserir_cliente');
    }


    //=======================================================
    //funçes relacionadas ao crud



    //inserir registros no banco de dados
    public function executarNovoCliente(Request $request){
             
        //executa a logica de validação

        $this->validate($request,[
            'cliente'=>'required',
            'text_vendedor'=>'required',
            'text_descricao'=>'required',  
            'valor'=>'required|numeric',
        ]); 
            
        //inserir o novo registro no BD
        $novo = new clientes;
        $novo->nome_cliente = $request->cliente;
        $novo->nome_vendedor = $request->text_vendedor;
        $novo->descricao = $request->text_descricao;
        $novo->valor = $request->valor;
        $novo->save();

        return redirect('/?sucesso');
    }



    //pagina de alterar dados
    // ================================================= //

    //retorna view de editar com campos preenchidos
    public function editar($id)
    {   
        $dados  = clientes::find($id);
        return view('/editar_cliente', compact('dados'));
    }

    //faz a alteração na tabela de clientes
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'cliente'=>'required',
            'text_vendedor'=>'required',
            'text_descricao'=>'required',  
            'valor'=>'required|numeric',
        ]); 
        
        //atualizar os dados da noticia no formulario 
        $novo = clientes::find($id);

        $novo->nome_cliente = $request->cliente;
        $novo->nome_vendedor = $request->text_vendedor;
        $novo->descricao = $request->text_descricao;
        $novo->valor = $request->valor;
        $novo->update();

        return redirect('/?sucesso2');

    }


    //delete
    // ================================================= //
    public function delete($id)
    {

        //remover dados da tabela
        clientes::destroy($id);
        return redirect('/?sucesso3');
    }


    //pesquisa do filtro de data
    public function getData(Request $request){
        
        $date1 = date($request->date1, time()); 
        $date2= date($request->date2, time());
        
        //soma um dia na data limite para ser considerado ná clausula between abaixo
        $date2 = date('Y/m/d', strtotime("+1 days",strtotime($date2)));

        $dados = DB::table('clientes')->whereBetween('created_at',array($date1, $date2))->get();
        /*
        .
        ..
        ... 
        A clausúla between não retorna o dia limite, então ao adicionar 
        1 dia a mais na data limite ela passa a ser considera no retorno da pesquisa.
        Ex: entre as datas (18/02) e (19/02) o resultado seria somente os registros com 
        data igual á 18/02 e quando a data passa á se tornar 20/02 os registros 
        com data igual á 19/02 passam a ser considerados no retorno da pesquisa.

        ... 
        ..
        . 
         */

        
        return view('/filtro_data',compact('dados'));
    }

}




