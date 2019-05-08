<?php

namespace App\Http\Controllers;

use App\Aeronave;
use App\Http\Requests\StoreAeronaveRequest;
use App\Http\Requests\UpdateAeronaveRequest;
use Illuminate\Http\Request;

class AeronaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $aeronaves = Aeronave::all();
        return view('aeronaves.index', compact('aeronaves'));
    }

    public function create()
    {
        $aeronave = new Aeronave();
        return view('aeronaves.add', compact('aeronave'));
    }

    public function store(StoreAeronaveRequest $request)
    {

        $aeronave = new Aeronave();
        $aeronave->fill($request->all());
        $aeronave->save();

        return redirect()
            ->route('aeronaves.index')
            ->with('success', 'Aeronave adicionada com sucesso!');
    }

    public function edit(Aeronave $aeronave)
    {
        $this->authorize('update', $aeronave);
        return view('aeronaves.edit', compact('aeronave'));
    }

    public function update(UpdateAeronaveRequest $request, Aeronave $aeronave)
    {
        $aeronave->fill($request->validated());
        $aeronave->save();

        return redirect()
            ->route('aeronave.index')
            ->with('success', 'Aeronave atualizada com sucesso!');
    }

    public function destroy(Aeronave $aeronave)
    {
        $aeronave->delete();
        return redirect()
            ->route('aeronave.index')
            ->with('success', 'Aeronave eliminada com sucesso!');
    }
}
