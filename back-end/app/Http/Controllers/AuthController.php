<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $password = $request->input('password');
        $passwords = [
            '144001' => 'Sale 1',
            '144002' => 'Sale 2',
            '144003' => 'Sale 3',
            '144004' => 'Sale 4',
            '238676' => 'Nguyễn Phước Hậu'
        ];

        if (strlen($password) !== 6) {
            return response()->json(['success' => false, 'message' => 'Password must be 6 digits'], 400);
        }

        if (array_key_exists($password, $passwords)) {
            return response()->json(['success' => true, 'username' => $passwords[$password]]);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid password'], 401);
        }
    }
}
