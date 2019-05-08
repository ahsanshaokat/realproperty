<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Property;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        
        $properties = Property::limit(5)->orderBy('id', 'desc')->get();
        $users = User::limit(5)->orderBy('id', 'desc')->get();

        return view('admin.master', compact('properties','users'));
    }



    public function updateAvatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(\public_path('/uploads/avatars/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return back();
    }

    public function viewUser(User $user){

        return view('admin.master', compact('user'));
        
    }
}
