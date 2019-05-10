@extends('master')

@section('title', 'Adicionar Utilizador')

@section('content')

@if (count($errors) > 0)
    @include('shared.errors')
@endif

<form action="{{route('users.store')}}" method="post" class="form-group">
    @include('users.partials.add-edit')

    <div class="form-group">
        <button type="submit" class="btn btn-success" name="ok" style="margin-bottom: 15px">Adicionar</button>
        <a type="submit" class="btn btn-default" href="{{route('users.index')}}" style="margin-bottom: 15px">Cancelar</a>
    </div>
</form>
@endsection
