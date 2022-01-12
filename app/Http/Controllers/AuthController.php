<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gender;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.auth.login');
    }

    /**
     * Make a login request.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'email.required' => 'Por favor, informe o e-mail.',
            'email.email' => 'Por favor, informe um e-mail válido.',
            'password.required' => 'Por favor, informe a senha.'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->route('auth.login')->withErrors([
            'email' => 'Credênciais inválidas'
        ]);
    }

    /**
     * Logout the user.
     */
    public function logout()
    {
        auth()->logout();

        return redirect()->route('auth.login');
    }

    /**
     * Register a new user.
     */
    public function register(Request $request)
    {

        $genders = Gender::all();

        if($request->method() == 'POST') {
            if(User::where('email', $request->email)->count() > 0) {
                return redirect()->route('auth.register')->withErrors(['email' => 'Email already in use']);
            }

            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'gender' => 'required',
                'photo' => 'required'
            ],[
                'name.required' => 'Por favor, preencha o nome!',
                'email.required' => 'Por favor, preecha o email!',
                'email.email' => 'Por favor, preencha um email válido!',
                'email.unique' => 'Email já cadastrado!',
                'password.required' => 'Por favor, preencha a senha!',
                'gender.required' => 'Por favor, selecione um gênero!',
                'photo.required' => 'Por favor, envie uma foto!'
            ]);

            $path = $request->file('photo')->store('public/images/user');

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'gender_id' => $request->gender,
                'profile_picture' => $path
            ]);

            auth()->login($user);

           return redirect()->route('home');
        }

        return view('app.auth.register', ['genders' => $genders]);
    }

}
