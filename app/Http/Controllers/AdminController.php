<?php

namespace App\Http\Controllers;

use App\Content;
use App\HomePage;
use App\Package;
use App\Qurey;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $home = HomePage::find(1);
        $quriesCount = Qurey::all();
        $packages = Package::all();
        $services = Content::all();
        $users = User::all();
        return view('admin.index',['home'=>$home,'quries'=>$quriesCount,'packages'=>$packages,'services'=>$services,'users'=>$users]);
    }
}
