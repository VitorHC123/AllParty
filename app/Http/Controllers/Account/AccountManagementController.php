<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;


class AccountManagementController extends Controller
{

    public function show_accounts()
    {
        $user = Auth::user();

        $role = $user ? $user->role : null;

        $collection = User::all();

        return view('admin.accountManagement.index', compact('user', 'role', 'collection'));
    }

    public function editScreen()
    {
        $users = User::all();

        return view("admin.accountManagement.edit_screen", compact('users'));
    }
    public function editUser($id)
    {
        $user = User::findOrFail($id);

        return view('admin.accountManagement.edit_screen', compact('user'));
    }
    public function updateUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:users,email,' . $request->user_id,
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::findOrFail($request->user_id);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture) {
                $oldImagePath = public_path(str_replace('storage/', '', $user->profile_picture));

                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); 
                }
            }

            $path = $request->file('profile_picture')->store('profiles', 'public');
            $user->profile_picture = 'storage/' . $path;  
        }

        $user->save();

        return redirect()->route('admin.accountManagement.index')->with('success', 'Usuário atualizado com sucesso!');
    }
    public function deleteUser($id)
{
    $user = User::findOrFail($id);

    if ($user->profile_picture) {
        $oldImagePath = public_path(str_replace('storage/', '', $user->profile_picture));

        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
    }

    $user->delete();

    return redirect()->route('admin.accountManagement.index')->with('success', 'Usuário excluído com sucesso!');
}

}
