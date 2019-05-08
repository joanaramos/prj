@extends('master')

@section('title', 'Lista de Aeronaves')

@section('content')
    @can('create', App\Aeronave::class)
        <div>
            <a class="btn btn-primary" href="{{route('aeronaves.create')}}">Add user</a>
        </div>
    @endcan

    @if(count($aeronaves))
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Matricula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Nº Lugares</th>
                <th>Conta-Horas</th>
                <th>Preco/Hora</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($aeronaves as $aeronave)
                <tr>
                    <td>{{$aeronave->matricula}}</td>
                    <td>{{$aeronave->marca}}</td>
                    <td>{{$aeronave->modelo}}</td>
                    <td>{{$aeronave->num_lugares}}</td>
                    <td>{{$aeronave->conta_horas}}</td>
                    <td>{{$aeronave->preco_hora}}</td>
                    <td>
                        @can('update', $aeronave)
                            <a class="btn btn-xs btn-primary" href="{{route('$aeronaves.edit', $aeronave)}}">Edit</a>
                        @endcan
                        @can('delete', $aeronave)
                            <form action="{{route('aeronaves.destroy', $aeronave)}}" method="POST" role="form" class="inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <h2>Não foram encontradas aeronaves.</h2>
    @endif
@endsection
