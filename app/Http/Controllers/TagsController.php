<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{


    public function index(){




           $tags = Tag::all();
        return view('tags.index')
            ->with('tags',Tag::all());


    }




    public function create()
    {

        return view('tags.create');





    }


    public function store(Request $request){

        Tag::create($request->all());


        return redirect()->route('tags');



    }






}
