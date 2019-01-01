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
  text-shadow: 1px 1px 1px #000000;"><strong> Posts <i style="color: #17a2b8;" class="fa fa-newspaper"></i> </strong>
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
  text-shadow: 1px 1px 0px #000000;">Title
                        </th>
                        <th style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">Content
                        </th>
                        <th style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">Create At
                        </th>
                        {{--<th style="  color: dimgray;--}}
  {{--text-shadow: 1px 1px 0px #000000;">Updated At--}}
                        {{--</th>--}}
                        <th style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">Edit
                        </th>
                        <th style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;" scope="col">Delete
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <td style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;"><a href="{{route('posts.show',['id'=>$post->id])}}"><img style="border-radius: 50%; width: 50px; height: 50px" src="{{$post->featured}}"
                                                                                              height="42"></a></td>
                            <td style=" font-size: 20px; color: dimgray;
  text-shadow: 1px 1px 0px #000000;"><a href="{{route('posts.show',['id'=>$post->id])}}">{{$post->title}}</a></td>
                            <td style=" font-size: 20px; color: dimgray;
  text-shadow: 1px 1px 0px #000000;">
                                <a href="{{route('posts.show',['id'=>$post->id])}}">{{str_limit($post->content,8)}}</a>
                            </td>
                            <td style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">{{$post->created_at->diffForhumans()}}</td>

                            {{--<td style="  color: dimgray;text-shadow: 1px 1px 0px #000000;">{{$post->updated_at->diffForhumans()}}</td>--}}

                            <td>
                                <a href="{{route('posts.edit',['id'=>$post->id])}}">
                               <i class="fa fa-pencil-alt" style=" font-size:20px;color: #17a2b8"> </i>
                                </a></td>

                            <td><a href="{{route('posts.delete',['id'=>$post->id])}}">
                                    <i class="fa fa-trash-alt" style=" font-size: 20px;color: #F66D61  "> </i>

                                </a></td>
                        </tr>
                        </a>
                    @endforeach
                    </tbody>
                </table>

                <a style="" href="/admin/post/create"><h1><i style=" text-shadow: -7px 8px 2px #c54040, -3px 5px #c74b16; ;font-size: 55px;color: #17a2b8;" class="fa fa-plus-circle" aria-hidden="true"></i></h1> </a>



            </div>
        </div>
    </div>








@stop