@extends('layouts.app')


@section('content')

    <link href="/open-iconic/font/css/open-iconic.css" rel="stylesheet">
    <script src="svg-injector.min.js"></script>
    <script>
        // Elements to inject
        var mySVGsToInject = document.querySelectorAll('.iconic-sprite');

        // Do the injection
        SVGInjector(mySVGsToInject);
    </script>

    <div class="container" style=" margin-left: -45px; width: 761px; margin-top: -7px;">

        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div style="box-shadow: 0 1px 2px 0 rgba(1, 3, 0, 0), 0 1px 5px 0 rgba(0, 0, 0, 0.19);" class="card-header">


                <h1 style="  color: dimgray;
  text-shadow: 1px 1px 1px #000000;"><strong> Users <i style="color: lightseagreen;" class="fa fa-users"></i> </strong>
                </h1>

            </div>

            <div class="card-body">

                <table style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                       class="table table-hover">
                    <thead>
                    <tr style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <th style=" height: 40px; color: dimgray;
  text-shadow: 1px 1px 0px #000000;"> Image
                        </th>
                        <th style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">name
                        </th>
                        <th style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">permissions
                        </th>
                        <th style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">Create At
                        </th>
                        {{--<th style="  color: dimgray;--}}
                        {{--text-shadow: 1px 1px 0px #000000;">Updated At--}}
                        {{--</th>--}}
                        {{--<th style="  color: dimgray;--}}
                        {{--text-shadow: 1px 1px 0px #000000;">Edit--}}
                        {{--</th>--}}
                        <th style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;" scope="col">Delete
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <td style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;"><img  src="{{$user->profile?$user->profile->avatar:'no image'}}"
                                          height="60ox" width="60px" style="border-radius: 50%"></td>
                            <td style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;"> {{$user->name}}</td>
                            <td style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">
                                @if($user->admin)
                                    <a href="{{route('user.not.admin',['id'=>$user->id])}}"
                                       class="btn btn-xs btn-danger" style="  { background: rgba(1,200,1,1.3);box-shadow: 1px 1px 1px rgba(0,20,0,0.8);}

"> Remove Permission</a>
                                @else
                                    <a href="{{route('user.admin',['id'=>$user->id])}}" class="btn btn-xs btn-success" style="  { background: rgba(1,200,1,1.3);box-shadow: 1px 1px 1px rgba(0,20,0,0.8);}

">
                                        Make admin</a>
                                @endif
                            </td>
                            <td style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">{{$user->created_at->diffForhumans()}}</td>

                            {{--<td style="  color: dimgray;text-shadow: 1px 1px 0px #000000;">{{$post->updated_at->diffForhumans()}}</td>--}}

                            {{--<td>--}}
                            {{--<a href="{{route('posts.edit',['id'=>$post->id])}}">--}}
                            {{--<i class="fa fa-pencil-alt" style=" font-size:20px;color: orange"> </i>--}}
                            {{--</a></td>--}}

                            {{--<td><a href="{{route('posts.delete',['id'=>$post->id])}}">--}}
                            {{--<i class="fa fa-trash-alt" style=" font-size: 20px;color: indianred"> </i>--}}

                            {{--</a></td>--}}


                            <td>

                                @if( \Illuminate\Support\Facades\Auth::id() == !$user->admin )

                                    <a href="{{route('user.delete',['id'=>$user->id])}}">
                                        <i class="fa fa-trash-alt" style=" font-size: 20px;color:  #F66D61"> </i>

                                    </a>

                                    @endif



                        </tr>
                        </a>
                    @endforeach
                    </tbody>
                </table>

                <a style="" href="/user/create"><h1><i
                                style="  border-radius: 50%;text-shadow: -7px 8px 2px #c54040, -3px 5px #c74b16; ;font-size: 55px;color: lightseagreen;"
                                class="fa fa-plus-circle" aria-hidden="true"></i></h1></a>


            </div>
        </div>
    </div>








@stop