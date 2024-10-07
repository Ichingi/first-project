<?php

namespace App\Http\Controllers;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->orderBy('id', 'desc')->paginate('10', ['id', 'name']);
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::query()->create($data);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::query()->find($id, ['name', 'email']);
        return view('users.show', compact('id', 'users' ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::query()->find($id, ['name', 'email', 'password']);
        $password = Crypt::encryptString($users['password']);
        return view('users.edit', compact('id', 'users', 'password'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $data = $request->validated();
        User::query()->find($id)->update($data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::query()->find($id);
        $users->delete();
        return redirect()->route('users.index');
    }
}
