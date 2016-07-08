<?php

namespace App\Http\Controllers;

use Image;
use Auth;
use App\Category;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::all();
        return view('home',compact('cat'));
    }

    public function profile()
    {
        $cat = Category::all();
        return view('auth.profile',array('user'=> Auth::user(),'cat'=>$cat));
    }

    public function update_avatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalName();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatar/'.$filename));
            $user =Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('auth.profile',array('user'=> Auth::user()));
    }

    public function update(Request $request , $id)
    {
       
        $users = User::findOrFail($id);
        if (Auth::user()->role == 'admin') {
            if ($request->role == 'muellim' || $request->role == 'mentor' || $request->role == 'user') {
            $users->update($request->all());
        }
        }
        elseif (Auth::user()->role == 'muellim') {
            if ($request->role == 'mentor' || $request->role == 'user') {
            $users->update($request->all());
        }
        }
        
        
        return redirect('/admin/tables');
    }

    public function destroy($id)
    {
       $user = User::findOrFail($id)->delete();    
        
        return back();
    }

    // public function cat()
    // {
    //     $cat = Category::all();

    //     return view('categories',compact('cat'));
    // }
}

