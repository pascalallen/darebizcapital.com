<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View|Factory
     */
    public function index()
    {
        return view('auth.profile', [
            'user' => auth()->user(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProfileUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        /** @var User $user */
        $user = User::find(auth()->id());
        $user->update($request->all());

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->storeAs(
                'public/avatars', str_slug($user->name) . '.' . $request->file('avatar')->getClientOriginalExtension()
            );

            $user->avatar = str_slug($user->name) . '.' . $request->file('avatar')->getClientOriginalExtension();
            $user->save();
        }

        return redirect()->back();
    }

    public function destroyImage()
    {
        /** @var User $user */
        $user = User::find(auth()->id());

        if (Storage::exists("public/avatars/$user->avatar")) {
            Storage::delete("public/avatars/$user->avatar");
        }

        $user->update([
            'avatar' => null,
        ]);

        return redirect()->back()->with([
            'status',
            'Image removed'
        ]);
    }
}
