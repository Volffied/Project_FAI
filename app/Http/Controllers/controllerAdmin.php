<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerAdmin extends Controller
{
    public function HalPageAdmin(){
        return view('Admin_Folder.Admin');
    }
}
