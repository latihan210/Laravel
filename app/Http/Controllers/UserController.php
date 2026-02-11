<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use \App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users.form', [
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create User',
                'method' => 'POST',
                'action' => '/users',
                'submit' => 'Create'
            ],
        ]);
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return redirect('/users');
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('users.form', [
            'user' => $user,
            'page_meta' => [
                'method' => 'PUT',
                'action' => '/users/' . $user->id,
                'title' => 'Edit User',
                'submit' => 'Update'
            ],
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect('/users/' . $user->id);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }
}
