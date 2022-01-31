<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SeenController extends Controller
{
    public function index($userId)
    {
        $user = User::findOrFail($userId);

        $user->notifications_amount = 0;
        $user->save();

        return response()->json([
            'user' => $user
        ]);
    }
}
