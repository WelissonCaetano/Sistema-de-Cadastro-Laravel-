@extends('layout.app', ["current" => "home"])

@section('body')
    <div class="jumbotron bg-ligth border border-secundary">
        <div class="row">
            <div class="card-desk">
                <div class="card-border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Aqui vc cadastra seus produtos.
                            So nao se esqueça de cadastra previamente as categorias
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre seus Produtos</a>
                    </div>
                </div>
                <div class="card-border border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Categorias</h5>
                            <p class="card-text">
                                Cadastre as categorias de seus produtos
                            </p>
                            <a href="/categorias" class="btn btn-primary">Cadastre suas Categorias</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection