@extends('layouts.main')

@section('title', $item->nome)

@section('principal')

<div>
    <ul class="container-inicio" >
        <li><img class="" src="/img/icone_corin.avif" style="max-width:50px; max-height:30px; width: auto; height: auto;"></li>    
        <li><h1 style="color: black; text-align: center; font-size: 16px; margin-top: 2mm;"><b>MANTO DO CORINTHIANS</b> Garanta o novo Manto do Timão</h1></li>
    </ul>
</div>

<div class="faixa" style="margin-top: 60px; ">
	<ul>
	    <li><img style="margin-left: 15%; max-width:80%; max-height:100%; width: auto; height: auto;" src="/img/tenis/{{ $item->img }}"></li>
    	<li><h1 style="font-size: 25px;">{{$item->nome}}</h1>
        <p>{{$item->tipo}}</p>
        <p>{{$item->marca}}</p>
        <p>R$ {{$item->preco}}</p>
        <p>Tamanho
            <ul style="display: flex; display: block; border: 1px solid #606060; width: 80px; height: 60px; border-radius: 8px">
                <li style="margin-top: 15px; margin-left: 25px;"><p style="font-size: 20px;">{{$item->tam}}</p></li>
            </ul>
        </p>
        <p style="font-weight: bold;">Descrição</p>
        <ul style="display: flex; display: block; max-width: 500px; max-height: 300px;">
                <li><p>{{$item->descricao}}</p></li>
        </ul>
        <p>Cor: {{$item->cor}}</p>
        <form action="/tenis/join/{{$item->id}}" method="POST">
            @csrf
            <a href="/tenis/join/{{$item->id}}" id="item-submit" onclick="item.preventDefault(); this.closest('form').submit();">
            <input type="submit" class="btn" style="border-radius: 200rem; background-color: #000; border: 1px solid #000; font-size: 15px; color: #fff; cursor: pointer;" value="Adicionar ao carrinho">
        </a></li></form>
	</ul>
    <div class="margem" style="margin-top: 40px;">
        <h4 style="color: #606060;">Informações</h4>
        <p class="event-owner">Cadastro feito por: {{$itemOwner['name']}}</p>
        <p class="events-participants">Interessados: {{count($item->users)}}</p>
    </div>
</div> 

@endsection