@extends('tickets.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Adicionar Cliente</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('tickets.index') }}"> Volta na página Home </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome do Cliente:</strong>
                    <input type="text" name="nome_cliente" class="form-control" placeholder="Nome Completo">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email do Cliente:</strong>
                    <input type="text" name="email_cliente" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="col-xs-6 col-sm-12 col-md-6">
                <button type="submit" class="btn btn-primary">Cadastra Cliente</button>
            </div>
        </div>

    </form>
@endsection