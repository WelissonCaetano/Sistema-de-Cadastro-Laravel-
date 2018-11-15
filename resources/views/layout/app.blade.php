<html>
    <head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Cadastro de Produtos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body{
            padding: 20px;
        }
        .navbar{
            margin-bottom: 20px;
        }
    </style>
</head>
    <body>
        <div class="container">
            
                @component('componente_navbar')
                    
                @endcomponent
        
            <main>
                @hassection('body')
                    @yield('body')
                @endif
            </main>
        </div>

    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
        
    </body>
</html>