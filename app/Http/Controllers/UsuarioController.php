<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;
use App\User;
use App\Model\Mensagens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    function store(Request $request)
    {
        $user = new User();

        $user->nome = $request->nome;
        $user->indicado_por = $request->indicado_por;
        $user->email = $request->email;
        $user->password = Hash::make($request->senha);


        $user->save();
        $email = $request->email;
        $senha = $request->senha;

        if (Auth::attempt(['email' => $email, 'password' => $senha])) {
            return redirect('/home');
        } else {
            return redirect('/');
        }
    }
    public function getusers(Request $request)
    {
        $perfil = User::all();
        return view('Cadastro', compact('perfil'));
    }



    function login(Request $request)
    {
        $email = $request->email;
        $senha = $request->senha;

        if (Auth::attempt(['email' => $email, 'password' => $senha])) {
            $guests = DB::table('users')
                ->where('indicado_por', Auth::user()->id)->get()->toArray();



            return view('Home', compact('guests'));
        } else {
            return redirect('/');
        }
    }
}
