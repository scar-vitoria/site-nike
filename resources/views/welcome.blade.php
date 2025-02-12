@extends('layouts.main')

@section('title', 'Nike - Produtos e Coleções Exclusivas - Just Do It - Nike.com.br')

@section('principal')
    <div>
        <ul class="container-inicio" >
            <li><img class="" src="/img/icone_corin.avif" style="max-width:50px; max-height:30px; width: auto; height: auto;"></li>    
            <li><h1 style="color: black; text-align: center; font-size: 16px; margin-top: 2mm;"><b>MANTO DO CORINTHIANS</b> Garanta o novo Manto do Timão</h1></li>
        </ul>
    </div>
    @if($search == "")
    <div class="margem"><img style="max-width:100%; max-height:40%; width: auto; height: auto;" src="/img/img3.avif"/></div>

    <h1 class="h1-inicio">Corinthians</h1>
    <div class="margem"><img class="" src="/img/img1.avif" style="max-width:100%; max-height:40%; width: auto; height: auto;"></div>

    <h1 class="h1-inicio">Dia dos Namorados</h1>
    <div class="margem"><img class="" src="/img/img2.avif" style="max-width:100%; max-height:40%; width: auto; height: auto;"></div>
    
    <h1 class="h1-inicio margem">Coleções</h2>
    @endif
    
@extends('tenis')



@endsection