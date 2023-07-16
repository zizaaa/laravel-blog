<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ApiController extends Controller
{    
    
    public function store(Request $request){
        $blog = Blog::create([
            'title'=>$request->title,
            'author_name'=>$request->author_name,
            'author_id'=>1,
            'body'=>$request->body,
            'category'=>$request->category,
            'img_url'=>$request->img_url
        ]);

        // $blog = new Blog;
        //     $blog -> title = $request->title;
        //     $blog -> author_name = $request->author_name;
        //     $blog -> author_id = 1;
        //     $blog -> body = $request->body;
        //     $blog -> category = $request->category;
        //     $blog -> img_url = $request->img_url;

            if($blog){
                return redirect('/');
            }else{
                return response()->json([
                    'status'=> 500,
                    'message'=> 'Something went error'
                ],500);
            }
    }
    
    public function update(Request $request, int $id)
    {
        $blog = Blog::find($id);
    
        if ($blog) {
            $blog->update([
                'title' => $request->title,
                'author_name' => $request->author_name,
                'author_id' => 1,
                'body' => $request->body,
                'category' => $request->category,
                'img_url' => $request->img_url
            ]);
            
            return redirect('/dashboard')->with('success', 'Blog post updated successfully.');
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong'
            ], 500);
        }
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
    
        if ($blog) {
            $blog->delete();
    
            return redirect('/dashboard');
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went error'
            ], 500);
        }
    }
    
}
