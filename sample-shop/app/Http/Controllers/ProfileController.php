<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();

        if (!$user->profile) {
            $user->profile()->create([]);
        }

        return view('profile.edit', [
            'profile' => $user->profile,
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'full_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'preferred_payment_method' => 'nullable|string|max:100',
        ]);

        if ($user->profile) {
            $user->profile()->update($data);
        } else {
            $user->profile()->create($data);
        }

        return redirect()->route('profile.edit')->with('status', 'Профиль обновлен');
    }
}