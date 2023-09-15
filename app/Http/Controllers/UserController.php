<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function import(Request $request)
    {
        //Uploading the excel
        $file = $request->file('upload');
        $file->store('/excel', 's4');

        // Importing data to Model
        Excel::import(new UsersImport, request()->file('upload'));

        return redirect('/')->with('success', 'Students uploaded sucessfully');
    }



    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
