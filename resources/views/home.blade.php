@extends('layouts.app')

@section('content')
<pagina tamanho="10">
    <painel titulo="Dashboard">
        Teste de conteúdo
        
        <div class="row">
            <div class="col-md-4">
            <caixa qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa>
            </div>
            
            <div class="col-md-4">
                <caixa qtd="1500" titulo="Usuários" url="#" cor="orange" icone="ion ion-person-stalker"></caixa>
            </div>
            
            <div class="col-md-4">
                <caixa qtd="3" titulo="Autores" url="#" cor="orange" icone="ion ion-person"></caixa>
            </div>
        </div> 
    </painel>
</pagina>
@endsection
