<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class DashboardController extends Controller
{

    public function index() {

        $usuarios = User::all()->count();

        // gráfico ' - usuarios

        $usersData = User::select([
            DB::raw("YEAR(created_at as ano"),
            DB::raw("COUNT(*) as total")
        ])
        ->groupBy("ano")
        ->orderBy("ano","asc")
        ->get();

        dd($usersData);

        return view("admin.dashboard", compact("usuarios"));
    }
}
