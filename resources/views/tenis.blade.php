@section('title', 'Nike - Produtos e Coleções Exclusivas - Just Do It - Nike.com.br')

@section('tenis')

<h1 class="h1-inicio" style="margin-left: 43px;">{{$search}}</h1>
<div id="tenis-container" class="margem">
    <div id="cards-container" class="row">
        @foreach($tenis as $item)
        <div class="container margem" style="max-width:28%; max-height:10%; width: auto; height: auto;">
            <img src="/img/tenis/{{$item->img}}">
            <a href="/tenis/{{$item->id}}"><button class="btn" style="margin-top: 40px; border-radius: 200rem; background: rgb(0, 0, 0); color: rgb(255, 255, 255); ">Saber Mais</button></a>
            <p style="margin-top: 20px; font-weight: bold; text-align:center;">{{$item->nome}}</p>
            <p style="text-align:center;">{{$item->descricao}}</p>
        </div>
        @endforeach
        @if(count($tenis) == 0 && $search)
            <p style="margin-left: 30px;">Não foi possível encontrar nenhum Tênis com o nome {{ $search }}! <a href="/">Ver Disponíveis</a></p>
        @elseif(count($tenis) == 0)
            <p style="margin-left: 17px;">Não há Tênis disponível.</p>
        @endif
        
    </div>
    </div>

@endsection
