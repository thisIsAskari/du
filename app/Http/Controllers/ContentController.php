<?php

namespace App\Http\Controllers;

use App\Content;
use App\HomePage;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContentController extends Controller
{
    public function editaboutus()
    {
        $aboutus = Content::find(1);
        $home = HomePage::find(1);
        return view('admin.aboutus.index',['aboutus'=>$aboutus,'home'=>$home]);
    }

    public function updateaboutus(Request $request)
    {
        $request->validate([
            'main_title'=>'required'
        ]);
        $aboutus = Content::find(1);
        $input['short_title'] = $request->short_title;
        $input['main_title'] = $request->main_title;
        $input['about_content'] = $request->about_content;
        if($image = $request->file('image'))
        {
            if($aboutus->image != null)
            {
                unlink(public_path() . '/storage/images/otherImages/' . $aboutus->image);
            }
            $imageName = time() . $image->getClientOriginalName();
            $image->storeAs('/images/otherImages/',$imageName);
            $input['image'] = $imageName;
        }
        $aboutus->update($input);
        Session::flash('message','About Us Updated Successfully!');
        Session::flash('alert-type','success');
        return back();
    }

    public function aboutus()
    {
        $aboutus = Content::find(1);
        $homepage = HomePage::find(1);
        return view('frontend.aboutus',['aboutus'=>$aboutus,'home'=>$homepage]);
    }

    public function services()
    {
        $services = Content::all();
        $homepage = HomePage::find(1);
        return view('frontend.services',['services'=>$services,'home'=>$homepage]);
    }

    public function index()
    {
        $services = Content::all();
        $home = HomePage::find(1);
        return view('admin.services.index',['services'=>$services,'home'=>$home]);
    }

    public function create()
    {
        $home = HomePage::find(1);
        return view('admin.services.create',['home'=>$home]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'main_title'=>'required|max:255'
        ]);
        $input['short_title'] = $request->short_title;
        $input['main_title'] = $request->main_title;
        $input['about_content'] = $request->about_content;
        if($image = $request->file('image'))
        {
            $imageName = time() . $image->getClientOriginalName();
            $image->storeAs('/images/otherImages',$imageName);
            $input['image'] = $imageName;
        }
        Content::create($request->all());
        Session::flash('message','New Service Created Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('service.index');
    }

    public function edit(Content $content)
    {
        $home = HomePage::find(1);
        return view('admin.services.edit',['service'=>$content,'home'=>$home]);
    }

    public function update(Request $request, Content $content)
    {
        $request->validate([
            'main_title'=>'required'
        ]);
        $input['short_title'] = $request->short_title;
        $input['main_title'] = $request->main_title;
        $input['about_content'] = $request->about_content;
        if($image = $request->file('image'))
        {
            if($content->image != null)
            {
                unlink(public_path() . '/storage/images/otherImages/' . $content->image);
            }
            $imageName = time() . $image->getClientOriginalName();
            $image->storeAs('/images/otherImages',$imageName);
            $input['image'] = $imageName;
        }
        $content->update($input);
        Session::flash('message','Service Updated Successfully!');
        Session::flash('alert-type','success');
        return back();
    }

    public function destroy(Content $content)
    {
        if($content->image != null)
        {
            unlink(public_path() . '/storage/images/otherImages/' . $content->image);
        }
        $content->delete();
        Session::flash('message','Service Deleted Successfully!');
        Session::flash('alert-type','success');
        return back();
    }
}
