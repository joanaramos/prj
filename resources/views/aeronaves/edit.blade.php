@extends('master')

@section('title', 'Edit Aeronave')

@section('content')

    @if (count($errors) > 0)
        @include('shared.errors')
    @endif

    <form action="{{route('aeronaves.update', $aeronave)}}" method="post" class="form-group">
        {{method_field('PUT')}}
        @include('aeronaves.partials.add-edit')
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="ok">Guardar</button>
            <a type="submit" class="btn btn-default" name="cancel" href="{{route('aeronaves.index')}}">Cancelar</a>
        </div>
    </form>
@endsection
