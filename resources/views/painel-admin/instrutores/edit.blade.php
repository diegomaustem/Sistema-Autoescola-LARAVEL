@extends('template.painel-admin')
@section('title', 'Edição Instrutores')
@section('content')

<h6 class="mb-4"><i>EDIÇÃO DE INSTRUTORES</i></h6><hr>
<form method="POST" action="{{route('instrutores.update', $instrutor)}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" value="{{$instrutor->nome}}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="" name="email" value="{{$instrutor->email}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{$instrutor->cpf}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone"  value="{{$instrutor->telefone}}">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="{{$instrutor->endereco}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Credencial</label>
                    <input type="text" class="form-control" id="" name="credencial" value="{{$instrutor->credencial}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Vencimento Credencial</label>
                    <input value="<?php echo date('Y-m-d') ?>" type="date" class="form-control" id="data" name="data">
                </div>
            </div>

        </div>

        <input type="hidden" name="oldCpf"  value="{{$instrutor->cpf}}">

        <p align="right">
        <button type="submit" class="btn btn-primary">Atualizar</button>
        </p>
    </form>

@endsection