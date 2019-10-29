@extends('layouts.padrao')

@extends('layouts.app')

@section('content')

    <h1>Registrar novo Produto</h1>

    <div class="container">

        <form method="POST" action="/produtos">

            {{ csrf_field() }}

            <div>
                <label>Nome do produto</label>
                <input type="text" name="nome" placeholder="nome" required>

            </div>
            <div>
                <label>Preço do produto</label>
                <textarea name="preco" placeholder="preço" required></textarea>

            </div>

            <div>

                <input type="submit" value="fazer produto">

            </div>

        </form>

    </div>


@endsection