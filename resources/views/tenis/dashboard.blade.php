@extends('layouts.main')

@section('title', 'Dasboard')

@section('principal')

    <ul style="list-style-type: none; width: 30%; margin-left:35%; margin-bottom: 50px;">
         <li style="text-align:center; border: 1px solid #ebeaea; border-radius: 5px; background-color: #ebeaea"><p style="margin-top: 8px; margin-bottom: 8px;">&#10122;   Meus cadastros</p></li>
    </ul>

    <div style="margin-left: 185px;">

    @if(count($tenis))
    <ul class="tabela"  style="">
        <li style="float: left; margin-left: 140px"><p >Id</p></li>
        <li style="float: left; margin-left: 60px;"><p>Produtos</p></li>
        <li style="float: left; margin-left: 370px;"><p>Interessados</p></li>
        <li style="float: left; margin-left: 200px;"><p></p></li>
    </ul>
    </div>

    <div style="margin-left: 15%;">

        <div class="col-md-9 offset-md-1 dashboard-tenis-container">
            <table class="table" >
                <tbody>
                    @foreach($tenis as $item)
                        <tr>
                            <td scropt="row" style="border: 1px solid #ffffff;">{{ $loop->index + 1 }}</td>
                            <td style="border: 1px solid #ffffff;"><a href="/tenis/{{ $item->id }}">{{ $item->nome }}</a></td>
                            <td style="border: 1px solid #ffffff;">{{count($item->users)}}</td>
                            <td style="border: 1px solid #ffffff;">
                                <a href="/tenis/edit/{{$item->id}}" class="btn edit-btn"><ion-icon name="create-outline"></ion-icon></a> 
                                <form action="/tenis/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-btn"><ion-icon name="trash-outline"></ion-icon></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>

    <div class="" style=" margin-bottom: 50px;"></div>   

    @else
    <h1 class="h1-inicio" style="margin-left: 40px; margin-top: 50px;">SEU CARRINHO ESTÁ VAZIO</h1>
    <p style="margin-left: 40px;">Navegue pelas categorias da loja ou faça uma busca pelo seu produto ou </p>

    <a href="/tenis/create"><input type="submit" class="btn" style="margin-top: 15px; margin-left: 40px; margin-bottom: 201px; border-radius: 200rem; background-color: white; border: 1px solid #bebbbb; font-size: 15px; color: black; cursor: pointer;" value="Cadastre seu Tênis"></a>
    @endif

    <ul style="list-style-type: none; width: 30%; margin-left:35%; margin-bottom: 50px;">
         <li style="text-align:center; border: 1px solid #ebeaea; border-radius: 5px; background-color: #ebeaea"><p style="margin-top: 8px; margin-bottom: 8px;">&#10103;   Carrinho</p></li>
    </ul>

    <div style="margin-left: 185px;">

    @if(count($tenisInteressados) > 0)
    <ul class="tabela"  style="">
        <li style="float: left; margin-left: 140px"><p >Id</p></li>
        <li style="float: left; margin-left: 60px;"><p>Produtos</p></li>
        <li style="float: left; margin-left: 370px;"><p>Interessados</p></li>
        <li style="float: left; margin-left: 200px;"><p></p></li>
    </ul>
    </div>

    <div style="margin-left: 15%;">

        <div class="col-md-9 offset-md-1 dashboard-tenis-container">
            <table class="table" >
                <tbody>
                    @foreach($tenisInteressados as $item)
                        <tr>
                            <td scropt="row" style="border: 1px solid #ffffff;">{{ $loop->index + 1 }}</td>
                            <td style="border: 1px solid #ffffff;"><a href="/tenis/{{ $item->id }}">{{ $item->nome }}</a></td>
                            <td style="border: 1px solid #ffffff;">{{count($item->users)}}</td>
                            <td style="border: 1px solid #ffffff;">
                                <form action="/tenis/leave/{{$item->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-btn"><ion-icon name="trash-outline"></ion-icon></button>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>

    <div class="" style=" margin-bottom: 50px;"></div>  

    @else
    <p style="margin-left: 40px;">Navegue pelas categorias da loja ou faça uma busca pelo seu produto</p> 
    <a href="/"><input type="submit" class="btn" style="margin-top: 15px; margin-left: 40px; margin-bottom: 201px; border-radius: 200rem; background-color: white; border: 1px solid #bebbbb; font-size: 15px; color: black; cursor: pointer;" value="Continuar comprando"></a>
    
    @endif


@endsection

