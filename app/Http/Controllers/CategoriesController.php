<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.categories.index')->with('categories',Category::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[

            'name' => 'required'

        ]);

        $category =  new Category;

        $category->name = $request->name;

        $category->save();

        Session::flash('success','Category Added');

        return redirect('/admin/category');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


        $category = Category::find($id);

        return view('admin.categories.edit')->with('category',$category);
    }

    /**
     * e the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $category = Category::find($id);

        $category->name = $request->name;

        $category->save();

        Session::flash('success','Category Updated');

        return redirect()->route('category.index');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

$category = Category::find($id);

foreach ($category->posts as $post) {
    $post->delete();
}
$category->delete();

        Session::flash('success','Category Deleted');

return redirect()->route('category.index');



        //
    }
}
