<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdmin extends Controller
{
    /**
     * Mostra a página inicial do usuário logado admin
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function __invoke()
    {
        return view('admin.dashboard')->with(['user'=>Auth::user()]);
    }
}
