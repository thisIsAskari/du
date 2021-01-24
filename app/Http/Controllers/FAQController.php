<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FAQ::all();
        $home = HomePage::find(1);
        return view('admin.faqs.index',['faqs'=>$faqs,'home'=>$home]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home = HomePage::find(1);
        return view('admin.faqs.create',['home'=>$home]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'question'=>'required',
           'answer'=>'required'
        ]);
        FAQ::create($request->all());
        Session::flash('message','New FAQ Created Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $FAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $FAQ)
    {
        return view('admin.faqs.edit',['faq'=>$FAQ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $FAQ)
    {
        $request->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);
        $FAQ->update($request->all());
        Session::flash('message','FAQ Updated Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQ $FAQ)
    {
        $FAQ->delete();
        Session::flash('message','FAQ Deleted Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('faq.index');
    }
}
