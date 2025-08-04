@extends('master')


@section('content')
    <nav id="navbar">
        <div id="navbar-inner">

            <div id="logo">
                <img src="{{ asset('imagens/livro-logo.png') }}" alt="" id = "logo-img">
                <h1>Livraria</h1>
            </div>

            <div id="user-container">

                <div id ="user-action">

                    <i class="bi bi-person-circle"></i>
                    <p>Harley</p>
                    
                    <div id="arrow">
                        <i class="bi bi-caret-down-fill"></i>
                    </div>

                </div>

                <div id="menu-user" class="hide">
                    <p>Editar dados</p>
                    <p>Mudar a senha</p>
                    <p class="danger">Deletar a conta</p>
                    <p class="danger">Sair</p>
                </div>

            </div>

        </div>
    </nav>
@endsection