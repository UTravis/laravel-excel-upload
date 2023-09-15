<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function import()
    {
        Excel::import(new UsersImport, request()->file('upload'));

        return redirect('/')->with('success', 'Students uploaded sucessfully');
    }
}
