<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardCommon extends Controller
{
    /**
     * Mostra a página inicial do usuário logado
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function __invoke()
    {
        return view('dashboard')->with(['user'=>Auth::user()]);
    }
}
