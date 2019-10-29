@extends('layouts.padrao')
@extends('layouts.app')

@section('contenteudo')

@foreach ($produtos as $produto)

<div class="container">
    <form action="/produtos/create">
        <div class="field">
            <div class="control">
                <button type="submit" class="button btn-success">Novo produto</button>
            </div>
        </div>
    </form>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Produtos</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/produtos/{{ $produto->id }}">{{ $produto->nome}}</a></td>
                <td><a href="/produtos/{{ $produto->id }}">{{ $produto->preco}}</a></td>
            </tr>
        </tbody>


    </table>
</div>

@endforeach



@endsection