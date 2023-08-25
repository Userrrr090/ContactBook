<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index () {

        return view('admin.index');
    }

    public function login (Request $request) {
        $adminData = $request->only('email', 'password');

        $admin = Admin::where('email', $adminData['email'])->find(1);

        if($admin) {
            if($admin->password == $adminData['password']) {
                $request->session()->put('admin', 'logged');

                return redirect()->route('contacts.index');
            }
        }

        return view('admin.index', ['message' => 'Wrong credentials']);
    }

    public function logout (Request $request) {
        $request->session()->forget('admin');

        return redirect()->route('contacts.index');
    }
}


