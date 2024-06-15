<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        try {
            $user = $request->user();
            $user->fill($request->validated());
    
            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }
    
            $user->save();
    
            return Redirect::route('profile.edit', ['user' => $user->id])->with('status', 'profile-updated');
        } catch (\Exception $e) {
            return Redirect::route('profile.edit', ['user' => $user->id])->withErrors(['update-error' => 'Error al actualizar el perfil']);
        }
    }

public function updatePicture(Request $request): RedirectResponse
{
    $request->validate([
        'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = $request->user();
    $path = $request->file('profile_picture')->store('profile_pictures', 'public');
    $user->profile_picture = $path;
    $user->save();

    return Redirect::route('profile.edit', ['user' => $user->id])->with('status', 'profile-picture-updated');
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        if ($user->profile_picture) {
            Storage::disk('public')->delete($user->profile_picture);
        }

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function deletePicture(Request $request): RedirectResponse
{
    $user = $request->user();
    if ($user->profile_picture) {
        Storage::disk('public')->delete($user->profile_picture);
        $user->profile_picture = null;
        $user->save();
    }

    return Redirect::route('profile.edit', ['user' => $user->id])->with('status', 'profile-picture-deleted');
}

}
