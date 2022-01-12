<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataadmin;

class DataadminController extends Controller
{
    public function index()
    {
        $data_admin = Dataadmin::where('user_role_id', '=', 1)->get();
        return view('dataadmin', compact('data_admin'));
    }
}
