@extends('layouts.app');

@section('conteudo')

    
    <div class="text-center pt-5">

        <a href="/" class="btn btn-success"> Voltar</a>
        
        <div class="pt-3"></div>
        <br>
        <h3 class="pt-5"> Histórico de movimentações da oficina Codificar</h3>
        <div style="padding-bottom:90px;"></div>
        

    <div class="row">
        <div id="scroll">
            <table id="minhaTabela" class="table">
                <thead id="" class="bg-dark text-light">
                  <tr>
                    <th  class="text-center "> Nome Cliente </th>
                    <th  class="text-center "> Descrição </th>
                    <th class="text-center"> Vendedor </th>
                    <th class="text-center"> Valor Orçamento </th>
                    <th  class="text-center "> Data e Hora </th>
                    <th class="text-center"> Opções </th>
                  </tr>
                </thead>

        
        <tbody id="tbody">
            
            @foreach ($dados as $item)
            <tr>
                <td  class="ls-txt-center pr-4 pl-4 text-primary" > {{ $item->nome_cliente }} </td>
                <td  class="ls-txt-center pr-4 pl-4" > {{ $item->descricao }} </td>
                <td  class="ls-txt-center pr-4 pl-4" > {{ $item->nome_vendedor }}</td>
                <td  class="ls-txt-center text-success pr-2 pl-2" > R$ {{ $number = number_format($item->valor, 2, ',', '')}}</td>
                <td  class="ls-txt-center pr-5 pl-5" > {{ date( 'd/m/Y - h:m' , strtotime($item->created_at)) }}</td>
                <td class="ls-txt-center">  
                    <a href="/editar_cliente/{{ $item->id }}" class="" 
                        aria-label="Editar"><i class="ls-ico-edit-admin ls-text-xl"> </i> </a>
                    
                    <a style="visibility: hidden;" href="/delete_cliente/{{ $item->id }}"> <i class="ls-ico-remove ls-text-xl botao" > </i> </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <br><br>
        </table>
        </div>
    </div>
</div>
<div class="pt-5 text-left">
    <input type="checkbox" class="form-check-input pt-5 float-right" name="check" id="check" value="true">
    <label class="form-check-label" for="exampleCheck1">Excluir registros</label>
</div>
@endsection