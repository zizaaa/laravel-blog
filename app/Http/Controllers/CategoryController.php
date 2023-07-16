<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    public function allCategory(){
        $blogs = Blog::all();

        $perPage = 4;
    
        $collection = new Collection($blogs);
    
        $currentPage = Paginator::resolveCurrentPage('page');
        $paginatedItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
    
        $paginatedItems = new Paginator($paginatedItems, $perPage, $currentPage);
    
        return view('components.categories.allCategory', compact('paginatedItems'));

        // return view('components.categories.allCategory', compact(['blogs']));
    }
    public function javascript(){
        $blogs = DB::table('blog')->where('category','Javascript')->get();

        return view('components.categories.javascript', compact('blogs'));
    }
    public function nodejs(){
        $blogs = DB::table('blog')->where('category','NodeJs')->get();

        return view('components.categories.node', compact('blogs'));
    }

    public function react(){
        $blogs = DB::table('blog')->where('category','ReactJs')->get();

        return view('components.categories.react', compact('blogs'));
    }
    public function laravel(){
        $blogs = DB::table('blog')->where('category','Laravel')->get();

        return view('components.categories.laravel', compact('blogs'));
    }
}
