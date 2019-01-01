<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Category;
class FrontEndController extends Controller
{
    public function index(){



       return view('index')->with('first_post',Post::orderBy('created_at','desc')->first())

         ->with('categories',Category::take(4)->get())
           ->with('secound_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
           ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
           ->with('laravel',Category::find(1))
           ->with('javascript',Category::find(2))
           ->with('angular',Category::find(3))
           ->with('vue Js',Category::find(4));


   }


   public function singlePost($slug){

//        dd($slug );
        $post  = Post::where('slug',$slug)->first();


        $next_post = Post::where('id','>',$post->id)->min('id');
        $previous_post = Post::where('id','<',$post->id)->max('id');


        return view('single')->with('post',$post)


            ->with('title',$post->title)
            ->with('categories',Category::take(5)->get())
            ->with('next',Post::find($next_post))
            ->with('previous',Post::find($previous_post))
            ->with('tags',Tag::all())
            ->with('tag',Post::find($post->id)->tags)
            ;

    }

    public function category($id){

       $category  = Category::find($id);


       return view('category')
           ->with('category',$category)
           ->with('title', $category->name)
           ->with('categories',Category::take(5)->get())


           ;



    }



public function tag($id){


        $tag = Tag::find($id);


        return view('tag')
            ->with('tag',$tag)
            ->with('title',$tag->tag)
            ->with('title',$tag->tag)
            ->with('categories',Category::take(5)->get())

            ;



}

   }
