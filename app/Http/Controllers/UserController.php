<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Daftar Users';
        return Inertia::render('Users/Index', [
            'title' => $title
        ]);
    }
}
