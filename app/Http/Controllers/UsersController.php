<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $data = DB::table('users')
            ->select('*')
            ->get();

        return view('admin.users', ['users' => $data]);
    }

}
