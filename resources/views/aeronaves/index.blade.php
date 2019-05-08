{{--
@extends('master')

@section('title', 'List users')

@section('content')
    @can('create', App\User::class)
        <div>
            <a class="btn btn-primary" href="{{route('users.create')}}">Add user</a>
        </div>
    @endcan

    @if(count($users))
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Matricula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Nº lugares</th>
                <th>Conta Horas
                <th>Preço/Hora</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->num_socio}}</td>
                    <td>{{$user->nome_informal}}</td>
                    <td>{{$user->data_nascimento}}</td>
                    <td>{{$user->typeToStr()}}</td>
                    <td>
                        @can('update', $user)
                            <a class="btn btn-xs btn-primary" href="{{route('users.edit', $user)}}">Edit</a>
                        @endcan
                        @can('delete', $user)
                            <form action="{{route('users.destroy', $user)}}" method="POST" role="form" class="inline">
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
        <h2>No users found</h2>
    @endif
@endsection
--}}
