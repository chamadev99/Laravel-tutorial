<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('welcome');
    }

    /**
     * Store a new product in the database.
     *
     * Middleware: auth
     *
     * @web
     * @route POST /products
     * @bodyParam string name required The name of the product. Example: iPhone 14
     * @bodyParam float price required The price of the product. Example: 999.99
     * @bodyParam string category required The category of the product. Example: Electronics
     * @bodyParam string description The description of the product. Example: Latest iPhone model.
     * @return \Illuminate\Http\RedirectResponse
     *
     * @example
     * POST /products
     * Request Body:
     * {
     *    "name": "iPhone 14",
     *    "price": 999.99,
     *    "category": "Electronics",
     *    "description": "Latest iPhone model."
     * }
     * Redirects to: /products
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
