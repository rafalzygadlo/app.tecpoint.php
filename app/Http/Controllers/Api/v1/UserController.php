<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function index()
    {
        return User::all();
    }
}
