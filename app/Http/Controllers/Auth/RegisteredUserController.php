<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $query = @unserialize(file_get_contents('http://ip-api.com/php/'));
        // if ($query && $query['status'] == 'success') {
        //     echo 'Hey user from ' . $query['country'] . ', ' . $query['city'] . '!';
        // }

        // foreach ($query as $data) {
        //     echo $data . "<br>";
        // }



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $query['country'] ? $query['country'] : '',
            'city' => $query['city'] ? $query['city'] : '',
            'country_code' => $query['countryCode'] ? $query['countryCode'] : '',
            'profile_image' => 'profile_icon.png',
            'newsletter' => $request->newsletter,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
