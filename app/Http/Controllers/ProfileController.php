<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showOnDashboard(){
        
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('admin.dashboard.index', compact('id','data'));
    }
}
