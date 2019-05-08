<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('list', User::class);
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $this->authorize('create', User::class);

        $user = new User;
        return view('users.add', compact('user'));
    }

    public function store(StoreUserRequest $request)
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

    public function update(UpdateUserRequest $request, User $user)
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

    public function isUser(){

    }
}
