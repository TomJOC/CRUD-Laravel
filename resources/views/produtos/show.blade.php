@extends('layouts.padrao')
@extends('layouts.app')

@section('contenteudo')


<h1 class="title"> Visualização de produtos </h1>

<table>
    <tr>
        <td>Nome: {{ $produtos->nome}}</td>
    </tr>

    <tr>
        <td>Preço: {{ $produtos->preco }}</td>
    </tr>


</table>

<br>
<p>

    

</p>

@endsection