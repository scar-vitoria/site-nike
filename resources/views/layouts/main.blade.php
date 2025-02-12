<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

        <!-- Css do Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Css da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        
    <header>
        <div class="">
            <ul class="" style= "list-style-type: none; margin: 0; padding: 0; overflow: hidden; background-color: #f0f0f0">
                <li class="" style="margin-top: 2mm; margin-bottom: 2mm; float: left; border-left: 40px solid #f0f0f0a8;"><img class="" src="/img/jordan.svg" style="max-width:20px; max-height:18px; width: auto; height: auto;"></li>
                <li class="" style="margin-top: 2mm; margin-bottom: 2mm; float: left; border-left: 30px solid #f0f0f0a8;"><img src="/img/snkrs.svg" style=""></li>
            </ul>
        </div>

        <div class="">
            <ul class="" style="list-style-type: none; overflow: hidden; background-color: white;">
                <li class="" style="margin-top: 5mm; margin-bottom: 2mm; float: left; border-left: 2px solid white;"><img src="/img/logo.svg" style=""></li>
                <li class="estilo-li" style="margin-top: 5mm; margin-bottom: 2mm; margin-right: 30px; margin-top: 4mm; float: right;"><a class="padding: 0px 10px;" href="/dashboard"><img class="" src="/img/mala.png" style="max-width: 60px; max-height: 38px; width: auto; height: auto;"></a></li>
                
                <li class="estilo-li" style="margin-top: 5mm; margin-bottom: 2mm; margin-right: 15px; margin-left: 20px; float: right;"><a class="padding: 0px 10px;" href="/"><img class="" src="/img/1077035.png" style="max-width: 40px; max-height: 20px; width: auto; height: auto;"></a></li>
                <div id="search-container">
                    <form action="/" method="GET">
                        <div style="margin-top: 4mm; border-radius: 15px; width:170px; height:40px; background-color:#f0f0f0a8; float:right; display: block; padding: 13px 10px;">
                            <img src="/img/pesquisa.png" class="" style="float:left; max-width:20px; max-height:12px; width: auto; height: auto;" alt="Buscar"/>
                            <input style="float:left; display: block; background-color:transparent; border: none; height:15px;width:100px;" type="text" id="search" name="search" placeholder="   Buscar"/>
                        </div>
                    </form>
                </div>  
                @auth
                <li class="estilo-li"><form action="/logout" method="POST">
                @csrf
                <a href="/logout" class="estilo-a" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                </form></li>
                @endauth
                @guest
                <li class="estilo-li"><a class="estilo-a" href="/register">Cadastrar</a></li>
                <li class="estilo-li"><a class="estilo-a" href="/login">Entrar</a></li>
                @endguest
                <li class="estilo-li"><a class="estilo-a" href="/tenis/create">Cadastrar Tênis</a></li>
                <li class="estilo-li"><a class="estilo-a" href="">Tênis</a></li>
                <li class="estilo-li"><a class="estilo-a" href="/">Principal</a></li>
            </ul>
        </ul>
        
    </header>

    <main>
        <div class="">
          <div class="">
                @if(session('m'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('principal')
                @yield('tenis')
           
          </div>
        </div>
    </main>

    <footer>
        <div style="background-color: black">
            <ul  class="tabela margem-rodape">
                <hr>
                <li class="rodape" >Brasil</li>
                <li class="rodape">Política de Privacidade</li>
                <li class="rodape">Termos de Uso</li>
                <li style="float:right; line-height: 2px; text-align: right; color: white; font-size: 12px;"><p>2023 Nike. Todos os direitos reservados. Fisia Comércio de Produtos Esportivos Ltda - CNPJ: 59.546.515/0045-55 Rodovia</p><p>Fernão Dias, S/N Km 947.5 - Galpão Modulo 3640 - CEP 37640-903 - Extrema - MG</p></li>
            </ul>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
