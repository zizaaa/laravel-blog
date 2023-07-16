<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    //about
    public function about(){
        return view('pages.about');
    }

    //form
    public function form(){
        return view('components.form');
    }
    
    public function viewBlog($id){
        $blog = DB::table('blog')->where('id', $id)->get();

        return view('pages.viewBlog', compact('blog'));
    }

    public function dashboardDatas(){
        $blogs = Blog::all();

        return view('components.dashboardHome', compact('blogs'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function editBlogForm($id){
        $blog = DB::table('blog')->where('id', $id)->get();

        // dd($blog);
        return view('components.editBlog', compact('blog'));
    }
}