<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'Alex',
                'age' => 25
            ],
            [
                'name' => 'Sophie',
                'age' => 18
            ],
        ];

        return view('dashboard', [
            'users' => $users
        ]);
    }
}
