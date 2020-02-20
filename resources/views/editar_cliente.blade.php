@extends('layouts.app')

@section('conteudo')
    {{-- criar conta de usuários --}}

    <div class="row">
        <div class="col-md-4 offset-4  col-sm-8 offset-2 col-xs-12">

            {{-- Apresentação dos erros de validação --}}

            @include('inc.erros')

            {{-- ========================================== --}}

        <form action="/atualizar_cliente/{{$dados->id}}" method="POST">
                
                {{-- token validação --}}
                {{ csrf_field() }}

                {{-- cliente --}}
                <div class="form-group text-left pt-5">
                    <label for="cliente"> <b> Cliente: </b> </label>
                    <input type="text" class="form-control" id="cliente" 
                name="cliente" value=" {{ $dados->nome_cliente }} " autocomplete="off">
                </div>

                {{-- vendedor --}}
                <div class="form-group text-left pt-2">
                    <label for="text_vendedor"> <b>Vendedor:</b>  </label>
                    <input type="text" class="form-control" id="text_vendedor" 
                name="text_vendedor" value="{{ $dados->nome_vendedor }}" autocomplete="off">
                </div>


                {{-- Descrição --}}
                <div class="form-group text-left pt-2">
                    <label for="text_descricao"> <b> Descrição do serviço: </b>  </label>
                    <textarea class="form-control" name="text_descricao" 
                    id="text_descricao" cols="30" rows="10"> {{ $dados->descricao }} </textarea>
                </div>


                {{-- valor --}}
                <div class="form-group pt-2 text-left">
                    <label for="valor"> <b> Valor R$: </b></label>
                    <input type="number" name="valor" class="form-control" id="valor" value="{{ $dados->valor }}">
                </div>

                <div class="text-center pt-5 margem-top-20">
                    <button type="submit" class="btn btn-outline-success pl-5 pr-5"> Atualizar </button> 
                    <a class="btn btn-outline-danger pr-5 pl-5" href="/"> Cancelar </a>
                </div>



            </form>

        </div>
    </div>
@endsection
