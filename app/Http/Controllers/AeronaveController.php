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
        $this->authorize('create', User::class);

        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()
            ->route('users.index')
            ->with('success', 'User added successfully!');
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    public function update(UpdateAeronaveRequest $request, User $user)
    {
        $this->authorize('update', $user);
        $user->fill($request->validated());
        $user->save();

        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        $user->delete();
        return redirect()
            ->route('users.index')
            ->with('success', 'User deleted successfully!');
    }
}
