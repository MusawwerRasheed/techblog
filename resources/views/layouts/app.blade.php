<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- ALL OF YOUR SITE CODE HERE -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <script src="{{ asset('js/toastr.min.js')}}"></script>

    <script>
        @if(\Illuminate\Support\Facades\Session::has('success'))
toastr.success("{{\Illuminate\Support\Facades\Session::get('success')}}")
        @endif

    </script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">


</head>
<body>
<div id="app">
    <nav style="box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 10px 0 rgba(0, 0, 0, 0);"
         class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                    @else
                        <li class="nav-item dropdown">
                            <a style="  color: dimgray;
  text-shadow: 1px 1px 1px #000000;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        {{--@yield('content')--}}

        <div class="container">
            <div class="row">

                @if(\Illuminate\Support\Facades\Auth::check())

                    <div class="col-lg-4">
                        <div class="card"
                             style="  margin-left: -40px  ;  height: 534px; width: 300px; { background: rgba(1,200,1,1.3);box-shadow: 1px 1px 12px rgba(0,20,0,0.8);} ">
                            <div class="card-body">

                                <ul class="list-group"
                                    style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 260px; ">


                                    <a style="color: dimgrey;text-shadow: 0px 0px 1px #000000;"
                                       href="{{route('admin.home')}}">
                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding-right: 23px; text-align: left"
                                            class="list-group-item"><i style="color: salmon" class="fa fa-home"></i>
                                            Home
                                        </li>
                                    </a>



                                    <a style="  color: dimgrey;
  text-shadow:  0px 0px 1px #000000;" href="{{route('user.profile')}}">

                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                                                       class="list-group-item" style="text-align: left">

                                            <i style="   font-size: 15px; color: dodgerblue;" class="fa fa-user"></i>        My profile
                                        </li>
                                    </a>







                                    <a style="  color: dimgrey;
  text-shadow: 0px 0px 1px #000000;" href="/admin/post/create">
                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            class="list-group-item" style="text-align: left">


                                            <i style="color: #17a2b8" class="fa fa-newspaper"></i> Create New Post
                                        </li>
                                    </a>

                                    <a style="  color: dimgrey;
  text-shadow: 0px 0px 1px #000000;" href="/admin/posts">
                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            class="list-group-item" style="text-align: left">


                                            <i style="color: #17a2b8" class="fa fa-newspaper"></i> Posts
                                        </li>
                                    </a>



                                    <a style="  color: dimgrey;
  text-shadow:0px 0px 1px #000000;" href="{{route('category.create')}}">
                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            class="list-group-item" style="text-align: left">
                                            <i style="color: #FB9866  " class="fas fa-th-list"></i> Create New Category
                                        </li>
                                    </a>


                                    <a style="  color: dimgrey;
  text-shadow:  0px 0px 1px #000000;" href="{{route('category.index')}}">

                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            class="list-group-item" style="text-align: left">

                                            <i style="color:#FB9866  ;" class="fas fa-th-list"></i> Categories
                                        </li>
                                    </a>




                                    <a style="  color: dimgrey;
  text-shadow:  0px 0px 1px #000000;" href="{{route('create.tag')}}">

                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            class="list-group-item" style="text-align: left">

                                            <i style="color:#6ed3cf;" class="fas fa-tags"></i> Create Tag
                                        </li>
                                    </a>



                                    <a style="  color: dimgrey;
  text-shadow:  0px 0px 1px #000000;" href="{{route('tags')}}">

                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            class="list-group-item" style="text-align: left">

                                            <i style="color:#6ed3cf;" class="fas fa-tags"></i> All Tags
                                        </li>
                                    </a>


                                @if(\Illuminate\Support\Facades\Auth::user()->admin)

                                    <a style="  color: dimgrey;
  text-shadow:  0px 0px 1px #000000;" href="{{route('user.create')}}">

                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            class="list-group-item" style="text-align: left">

                                            <i style=" font-size: 18px; color: lightseagreen;" class="fa fa-users"></i> Create User
                                        </li>
                                    </a>




                                    <a style="  color: dimgrey;
  text-shadow:  0px 0px 1px #000000;" href="{{route('users')}}">

                                        <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                            class="list-group-item" style="text-align: left">

                                            <i style=" font-size: 18px; color: lightseagreen;" class="fa fa-users"></i> Users
                                        </li>
                                    </a>


@endif





                                </ul>

                            </div>

                        </div>


                    </div>
                @endif

                <div class="col-lg-8">


                    @yield('content')
                </div>
            </div>
        </div>


    </main>
</div>
</body>
</html>
