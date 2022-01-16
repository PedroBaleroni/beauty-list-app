<?php

namespace App\Http\Controllers;

use App\Models\RoleInteration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function insert(Request $request)
    {

        $credenciais = [
            'cellphone' => $request->cellphone,
            'password' => $request->password
        ];
        $conta = User::where('cellphone', $credenciais['cellphone'])->first();
        if (Hash::check($request->password, $conta->password, [])) {
            $tipo = RoleInteration::Where('user_id', $conta->id)->first();
            $tipo = $tipo->role_id;
            if ($tipo == 1) {
                return redirect()->route('auth.index');
            }
            if ($tipo == 2) {
                return redirect()->route('schedule.admin');
            }
            if ($tipo == 3) {
                return redirect()->route('schedule.index');
            }
        } else {
            return view('welcome');
        }
    }


    public function manager()
    {
        return view('manager.index');
    }

    public function register(Request $request)
    {

        $usr =
            [
                'name' => $request->name,
                'cellphone' => $request->cellphone,
                'password' => Hash::make($request->password),
                'password_verified_at' => now()
            ];

        $user = User::create($usr);

        $role = new RoleInteration(
            [
                'user_id' => $user->id,
                'role_id' => $request->role
            ]
        );
        $role->save();

        return redirect()->route('manager.index');
    }
}
