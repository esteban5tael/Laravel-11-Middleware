<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class _SiteController extends Controller
{
    public function __invoke(): View
    {
        return view('index');
    }

    public function admin(): View
    {
        return view('isAdmin.index');
    }

    public function user(): View
    {
        return view('isUser.index');
    }
}
