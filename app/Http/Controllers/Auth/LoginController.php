<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('users_login.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            $user = Auth::user();

            if ($user->role && $user->role->nome == 'Admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect('/');
            }
           
        }

        return redirect('/login')->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
