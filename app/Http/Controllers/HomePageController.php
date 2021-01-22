<?php

namespace App\Http\Controllers;

use App\Content;
use App\HomePage;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomePageController extends Controller
{
    public function index()
    {
        $homepage = HomePage::find(1);
        $packages = Package::all();
        $services = Content::all();
        return view('index',['home'=>$homepage,'packages'=>$packages,'services'=>$services]);
    }
    public function edithomeheader()
    {
        $homepage = HomePage::find(1);
        return view('admin.home.homeheader',['home'=>$homepage]);
    }

    public function updatehomeheader(Request $request)
    {
        $request->validate([
            'contact'=>'max:11'

        ]);
        $homePage = HomePage::find(1);
        $input['contact'] = $request->contact;
        $input['facebook_link'] = $request->facebook_link;
        $input['instagram_link'] = $request->instagram_link;
        $input['twitter_link'] = $request->twitter_link;
        if($image = $request->file('logo'))
        {
            if($homePage->logo != null)
            {
                unlink(public_path() . '/storage/images/logo/' . $homePage->logo);
            }
            $imageName = time() . $image->getClientOriginalName();
            $image->storeAs('images/logo',$imageName);
            $input['logo'] = $imageName;
        }

        if($image = $request->file('main_image'))
        {
            if($homePage->main_image != null)
            {
                unlink(public_path() . '/storage/images/backgroundImage/' . $homePage->main_image);
            }
            $imageName = time() . $image->getClientOriginalName();
            $image->storeAs('/images/backgroundImage',$imageName);
            $input['main_image'] = $imageName;
        }
        $input['main_image_content_one'] = $request->main_image_content_one;
        $input['main_image_content_two'] = $request->main_image_content_two;
        $input['main_image_content_three'] = $request->main_image_content_three;
        $input['main_image_content_four'] = $request->main_image_content_four;

        $homePage->update($input);

        Session::flash('message','Home Header Updated Successfully!');
        Session::flash('alert-type','success');
        return back();
    }

    public function editinternetservices()
    {
        $homepage = HomePage::find(1);
        $services = Content::all();
        return view('admin.home.internetservices',['home'=>$homepage,'services'=>$services]);
    }

    public function updateinternetservices(Request $request)
    {
        $request->validate([
            'section_two_status'=>'required'
        ]);
        $homePage = HomePage::find(1);
        $input['section_two_status'] = $request->section_two_status;
        $input['section_two_short_heading'] = $request->section_two_short_heading;
        $input['section_two_main_heading'] = $request->section_two_main_heading;
        $input['section_two_content_one_id'] = $request->section_two_content_one_id;
        $input['section_two_content_two_id'] = $request->section_two_content_two_id;
        $input['section_two_content_three_id'] = $request->section_two_content_three_id;
        $homePage->update($input);

        Session::flash('message','Internet Services Updated Successfully!');
        Session::flash('alert-type','success');
        return back();
    }

    public function editaboutsection()
    {
        $homepage = HomePage::find(1);
        return view('admin.home.aboutsection',['home'=>$homepage]);
    }

    public function updateaboutsection(Request $request)
    {

        $request->validate([
            'section_three_status'=>'required'
        ]);
        $homePage = HomePage::find(1);
        $input['section_three_status'] = $request->section_three_status;
        $input['section_three_short_heading'] = $request->section_three_short_heading;
        $input['section_three_main_heading'] = $request->section_three_main_heading;
        if($image = $request->file('section_three_image'))
        {
            if($homePage->section_three != null)
            {
                unlink(public_path() . '/storage/images/otherImages/' . $homePage->section_three_image);
            }
            $imageName = time() . $image->getClientOriginalName();
            $image->storeAs('images/otherImages',$imageName);
            $input['section_three_image'] = $imageName;
        }
        $input['section_three_about'] = $request->section_three_about;
        $homePage->update($input);
        Session::flash('message','About Section Updated Successfully!');
        Session::flash('alert-type','success');
        return back();
    }

    public function editallservices()
    {
        $homepage = HomePage::find(1);
        $services = Content::all();
        return view('admin.home.allservices',['home'=>$homepage,'services'=>$services]);
    }

    public function updateallservices(Request $request)
    {

        $request->validate([
            'section_four_status'=>'required'
        ]);

        $homePage = HomePage::find(1);
        $input['section_four_status'] = $request->section_four_status;
        $input['section_four_short_heading'] = $request->section_four_short_heading;
        $input['section_four_main_heading'] = $request->section_four_main_heading;
        $input['section_four_content_one_id'] = $request->section_four_content_one_id;
        $input['section_four_content_two_id'] = $request->section_four_content_two_id;
        $input['section_four_content_three_id'] = $request->section_four_content_three_id;
        $input['section_four_content_four_id'] = $request->section_four_content_four_id;
        $input['section_four_content_five_id'] = $request->section_four_content_five_id;
        $input['section_four_content_six_id'] = $request->section_four_content_six_id;
        $homePage->update($input);
        Session::flash('message','All Services Updated Successfully!');
        Session::flash('alert-type','success');
        return back();
    }

    public function editpackagessection()
    {
        $homepage = HomePage::find(1);
        $packages = Package::all();
        return view('admin.home.packagessection',['home'=>$homepage,'packages'=>$packages]);
    }

    public function updatepackagessection(Request $request)
    {
        $request->validate([
            'section_five_status'=>'required'
        ]);
        $homePage = HomePage::find(1);
        $input['section_five_status'] = $request->section_five_status;
        $input['section_five_short_heading'] = $request->section_five_short_heading;
        $input['section_five_main_heading'] = $request->section_five_main_heading;
        $input['section_five_package_one_id'] = $request->section_five_package_one_id;
        $input['section_five_package_two_id'] = $request->section_five_package_two_id;
        $input['section_five_package_three_id'] = $request->section_five_package_three_id;
        $homePage->update($input);
        Session::flash('message','Packages Section Updated Successfully!');
        Session::flash('alert-type','success');
        return back();
    }

    public function editfaqsection()
    {
        $homepage = HomePage::find(1);
        return view('admin.home.faqsection',['home'=>$homepage]);
    }

    public function updatefaqsection(Request $request)
    {
        $request->validate([
            'section_six_status'=>'required'
        ]);
        $homePage = HomePage::find(1);
        $input['section_six_status'] = $request->section_six_status;
        $input['section_six_short_heading'] = $request->section_six_short_heading;
        $input['section_six_main_heading'] = $request->section_six_main_heading;
        $homePage->update($input);
        Session::flash('message','FAQ Section Updated Successfully!');
        Session::flash('alert-type','success');
        return back();
    }



}
