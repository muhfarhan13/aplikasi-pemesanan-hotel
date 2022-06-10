<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Alert;
use Auth;

class UserController extends Controller
{
    public function edit()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('tamu.account', compact('user'));
    }

    public function update(Request $request)
    {
        User::where('id', Auth::user()->id)->update([
            'name' => $request['name'],
            'password' => bcrypt($request['password']),
            'email' => $request['email'],
        ]);

        Alert::success('Success', 'Youve Successfully edit account!');

        return redirect()->route('account');
    }
}
