@extends('master')

@section('title', 'Adicionar Aeronave')

@section('content')

    @if (count($errors) > 0)
        @include('shared.errors')
    @endif

    <form action="{{route('aeronaves.store')}}" method="post" class="form-group">
        @include('aeronaves.partials.add-edit')

        <div class="form-group">
            <button type="submit" class="btn btn-success" name="ok">Adicionar</button>
            <a type="submit" class="btn btn-default" href="{{route('aeronaves.index')}}">Cancelar</a>
        </div>
    </form>
@endsection
