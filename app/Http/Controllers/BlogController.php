<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogpost;
use App\Models\User;
use auth;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blogpost::all();
        return view('blogpage', compact('blog'));
    }

    public function store(Request $request)
    {
        $blogpost = new Blogpost();

        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'

        ]);

        $blogpost->uid = Auth::id();
        $blogpost->title = $request->input('title');
        $blogpost->description = $request->input('description');
        $blogpost->save();
        Alert::success('Post added Successfully');
        return redirect('blogpage');
    }

    public function manage()
    {
        $blog = Blogpost::where('uid', Auth::id())->get();
        return view('managepost', compact('blog'));
    }

    public function editpost($id)
    {
        $blogpost = Blogpost::find($id);
        return view('editpost', compact('blogpost'));
    }

    public function updatepost(Request $request, $id)
    {
        $blogpost = Blogpost::find($id);

        $blogpost->title = $request->input('title');
        $blogpost->description = $request->input('description');
        $blogpost->update();
        Alert::success('Post Updated Successfully', 'see the updated post');
        return redirect('managepost');
    }

    public function deletepost($id)
    {
        $blogpost = Blogpost::find($id);
        $blogpost->delete();
        return redirect('managepost')->with('message','Post deleted successfully');
        Alert::error('post deleted Successfully');
        
    }
}
