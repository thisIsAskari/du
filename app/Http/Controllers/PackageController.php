<?php

namespace App\Http\Controllers;

use App\HomePage;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index',['packages'=>$packages]);
    }

    public function create()
    {
        return view('admin.packages.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255'
        ]);
        Package::create($request->all());
        Session::flash('message','New Package Created Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('package.index');
    }

    public function edit(Package $package)
    {
        return view('admin.packages.edit',['package'=>$package]);
    }
    public function update(Request $request,Package $package)
    {
        $request->validate([
            'name'=>'required|max:255'
        ]);
        $package->update($request->all());
        Session::flash('message','Package Updated Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('package.index');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        Session::flash('message','Package Deleted Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('package.index');
    }

    public function pricing()
    {
        $homepage = HomePage::find(1);
        $packages = Package::all();
        return view('frontend.pricing',['home'=>$homepage,'packages'=>$packages]);
    }
}
