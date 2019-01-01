<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin/posts/index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


      return view('admin.posts.create')->with('categories',Category::all())

          ->with('tags',Tag::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $this->validate($request,[
            'title'=>'required',
            'featured'=>'required|image',
            'content'=>'required',
            'category_id'=>'required'
        ]);
//dd($request);
        $input = $request->all();

        if($file =$request->file('featured')){

          $name =  '/uploads/posts/'.time().$file->getClientOriginalName();

          $file->move('uploads/posts',$name);

//           $photo = Post::create(['featured'=>$name]);

             $input['featured'] = $name;
             $input['slug'] = $request->title;


          $post =  Post::create($input);
            $post->tags()->attach($request->tags);
             return redirect('admin/posts');



        }




    }






//
//        Post::create($request->all());
//
//        return redirect('admin/posts');
//




    public function show($id)
    {


        $posts = Post::findOrFail($id);

        return view('admin/posts/show',compact('posts'));






    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

        $posts =  Post::find($id);

        $categories = Category::all();

        return view('admin.posts.edit',compact('posts','categories'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $this->validate($request, [
            'title' => 'required',
            'featured' => 'required|image',
            'content' => 'required',
//            'category_id'=>'required'
        ]);
//
//        $post= Category::find($id);

//        $post->title = $request->title;
//        $post->fea = $request->name;
//        $post->name = $request->name;
//        $post->name = $request->name;
//
//        $category->save();

        $post = Post::find($id);

        $post->title = $request->title;

        $post->content = $request->content;

        $file = $request->file('featured');

        $name = '/uploads/posts/'.time().$file->getClientOriginalName();

        $file->move('uploads/posts', $name);


        $post['featured'] = $name;

        $post->save();

        return redirect('/admin/posts');

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $post=  Post::findOrFail($id);

      if($post->tags){

          $post->tags()->detach($post->tags);

      }



      $post->delete();

        return redirect('admin/posts');


        //
    }

//
//
//    public function singlepost(){
//
//
//            $posts = \App\Post::where('title','like','%'.request('query').'%')->get();
//
//            return view('results')
//                 ->with('slug',$posts->slug)
//                ->with('posts',$posts)
//                ->with('title', 'Seaerch Results: '.request('query'))
//                ->with('categories',\App\Category::take(5)->get())
//                ->with('query',request('query'))
//                ;
//
//




//        }













}
