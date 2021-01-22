<?php

namespace App\Http\Controllers;

use App\HomePage;
use App\Qurey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QureyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'area_name'=>'required',
            'building_no'=>'required|numeric',
            'contact_no'=>'required|numeric'
        ]);
        Qurey::create($request->all());
        Session::flash('contact','Request Submitted');
        return redirect()->route('home');
    }

    public function index()
    {
        $homepage = HomePage::find(1);
        return view('frontend.contact',['home'=>$homepage]);
    }

    public function showall()
    {
        $quries = Qurey::all();
        return view('admin.quries.index',['quries'=>$quries]);
    }

    public function destroy(Qurey $qurey)
    {
        $qurey->delete();
        Session::flash('message','Qurey Deleted Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('qurey.all');
    }
}
