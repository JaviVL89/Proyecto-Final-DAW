<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|min:6',
            ]);

            $validated['password'] = Hash::make($validated['password']);
            $user = User::create($validated);

            return response()->json(['message' => 'Usuario creado exitosamente.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al crear el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,' . $user->id,
                'password' => 'sometimes|nullable|min:6',
            ]);

            if ($request->filled('password')) {
                $validated['password'] = Hash::make($validated['password']);
            } else {
                unset($validated['password']);  // Remove password from array if not provided
            }

            $user->fill($validated);
            $user->save();

            return response()->json(['message' => 'Usuario actualizado exitosamente.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al actualizar el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            Auth::logout();  // Logout the user after deleting their account
            return response()->json(['message' => 'Usuario eliminado exitosamente.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al eliminar el usuario: ' . $e->getMessage()], 500);
        }
    }
}
