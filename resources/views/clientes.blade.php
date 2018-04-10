@extends('layouts.app')

@section('content')
@if (count($cadastros) > 0)
<table>
    <tr>
        <th>Código</th>
        <th>Razão Social</th>
    </tr>
    @foreach ($cadastros as $cadastro)
        <tr>
            <td>{{$cadastro->codigo_cliente_omie}}</td>
            <td>{{$cadastro->razao_social}}</td>
        </tr>            
    @endforeach
</table>

@endif

@endsection
