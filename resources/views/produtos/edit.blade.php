@extends('layouts.padrao')
@extends('layouts.app')

@section('contenteudo')


<h1 class="title"> Editar produtos</h1>

<form method="POST" action="/produtos/{{ $produtos->id }}">

    @method('PATCH')
    @csrf


    <div class="field">

        <label class="lable" for="nome">Nome</label>

        <div class="control">

            <input type="text" class="input" name="nome" placeholder="Title" value="{{ $produtos->name }}" required>

        </div>

    </div>

    <div class="field">

        <label class="lable" for="preco">preço </label>

        <div class="control">

            <textarea class="textarea" name="preco" required>{{ $produtos->preco }} </textarea>

        </div>

    </div>

    <div class="field">

        <div class="control">

            <button type="submit" class="button is-link">Atualizar produto</button>

        </div>

    </div>

</form>

<form method="POST" action="/produtos/{{ $produtos->id }}">

    @method('DELETE')
    @csrf


    <div class="field">

        <div class="control">

            <button type="submit" class="button is-link">Deletar produtos</button>

        </div>

    </div>

</form>


@endsection