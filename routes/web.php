<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    'uses' => 'FrontEndController@index',
        'as' => 'index'


    ]
);

Auth::routes();


Route::prefix('admin')->group(function (){

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/','Admincontroller@index')->name('admin.dashboard');

});


//    Route::resource('posts','PostsController');



Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){


    Route::get('/home', 'HomeController@index')->name('admin.home');





///////////// post ///////////





    Route::get('post/create',[

        'uses' =>'PostsController@create',
        'as'=>'post.create'

    ]);



    Route::post('posts/store',[

        'uses' =>'PostsController@store',
        'as'=>'post.store'

    ]);


    Route::get('posts',[

        'uses' =>'PostsController@index',
        'as'=>'posts'

    ]);



    Route::get('posts/show/{id}',[

        'uses' =>'PostsController@show',
        'as'=>'posts.show'

    ]);



    Route::get('posts/delete/{id}',[

        'uses' =>'PostsController@destroy',
        'as'=>'posts.delete'

    ]);



    Route::get('posts/edit/{id}',[

        'uses' =>'PostsController@edit',
        'as'=>'posts.edit'

    ]);


    Route::Post('posts/update/{id}',[

        'uses' =>'PostsController@update',
        'as'=>'posts.update'

    ]);




    /////////  Category /////////////////



    Route::get('category/create',[

        'uses' =>'CategoriesController@create',
        'as'=>'category.create'

    ]);


    Route::post('category/store',[

        'uses' =>'CategoriesController@store',
        'as'=>'category.store'

    ]);

    Route::get('category',[

        'uses' =>'CategoriesController@index',
        'as'=>'category.index'

    ]);


    Route::get('category/edit/{id}',[

        'uses' =>'CategoriesController@edit',
        'as'=>'category.edit'

    ]);

    Route::get('category/delete/{id}',[

        'uses' =>'CategoriesController@destroy',
        'as'=>'category.delete'

    ]);


    Route::post('category/update/{id}',[

        'uses' =>'CategoriesController@update',
        'as'=>'category.update'

    ]);


});

  Route::get('/test', function(){

      return App\User::find(1)->profile;

});







/////////////////// users  ////////////////////



Route::get('/users',[
    'uses' => 'UsersController@index',
    'as' => 'users'
    ]);


Route::get('/user/create',[
    'uses' => 'UsersController@create',
    'as' => 'user.create'
]);


Route::post('/users/store',[

    'uses' => 'UsersController@store',
    'as' => 'user.store',


    ]);



Route::get('/user/admin/{id}',[

    'uses'=>'UsersController@admin',
    'as' =>'user.admin'

]);

Route::get('/user/not-admin/{id}',[

   'uses' =>'UsersController@not_admin',
    'as' =>'user.not.admin'

]);


Route::get('/user/profile',[

    'uses' =>'ProfileController@index',
    'as' => 'user.profile'

    ]);


Route::post('/user/profile/update',[

    'uses' => 'ProfileController@update',
    'as' => 'user.profile.update'

]);



Route::get('/user/delete/{id}',[

    'uses' => 'UsersController@destroy',
    'as' => 'user.delete'

]);

Route::get('/results/{slug}',[

    'uses'=>'FrontEndController@singlePost',
    'as' =>'post.single'

]);



 Route::get('/results',function (){


//
     $posts = \App\Post::where('title','like','%'.request('query').'%')->get();
//dd($posts);
     return view('results')->with('posts',$posts)

         ->with('title','Results for: '.request('query'))
         ->with('categories',\App\Category::take(5)->get())
         ->with('query',request('query'));

//


 });







 /////////////////////  TAG ///////////////////////////



Route::get('/tag/index',[

    'uses'=>'TagsController@index',
    'as'=>'tags'



]);




Route::get('/tag/create',[

     'uses'=>'TagsController@create',
    'as'=>'create.tag'


     ]);







Route::post('/tag/store',[

    'uses'=>'TagsController@store',
    'as'=>'store.tag'


]);



Route::get('/tag/edit/{id}',[

    'uses'=>'TagsController@edit',
    'as'=>'edit.tag'


]);



Route::get('/tag/update/{id}',[

    'uses'=>'TagsController@update',
    'as'=>'update.tag'


]);


Route::get('/tag/delete/{id}',[

    'uses'=>'TagsController@delete',
    'as'=>'delete.tag'


]);







Route::get('/category/{id}',[

    'uses' => 'FrontEndController@category',
    'as'   => 'category.single'
]);


Route::get('/tag/{id}',[

    'uses' => 'FrontEndController@tag',
    'as'   => 'tag.single'


]);







