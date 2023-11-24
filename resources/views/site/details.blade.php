@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

<div class="row container">
    <div class="col s12 m6">
        <img src="{{ $produto->imagem }}" class="responsive-img">   
    </div>
    <div class="col s12 m6">
        
        <h1> {{ $produto->nome }}</h1>  
        <p> Postado por: {{ $produto->user->Firstname }} <br>
            Categoria: {{ $produto->Categoria->nome}}
        </p>
        <button class="btn orange btn-large"> Comprar </button>
    </div>
</div>

@endsection