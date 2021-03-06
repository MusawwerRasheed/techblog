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

    <div class="container" style=" margin-left: -45px; width: 761px; margin-top: -7px;" >

        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div  style="box-shadow: 0 1px 2px 0 rgba(1, 3, 0, 0), 0 1px 5px 0 rgba(0, 0, 0, 0.19);" class="card-header">


                <h1 style="  color: dimgray;
  text-shadow: 1px 1px 1px #000000;"> <strong > Tags  <i style="color: #6ed3cf" class="fas fa-tags"></i> </strong></h1>

            </div>

            <div class="card-body">

                <table style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="table table-hover">
                    <thead>
                    <tr style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <th  style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;" > Tag name</th>
                        <th  style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;" >Created At</th>
                        <th  style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;" >Updated At</th>
                        <th  style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;" >Edit</th>
                        <th  style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;" scope="col">Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                            <td style="  font-size: 20px;color: dimgray;
  text-shadow: 1px 1px 0px #000000;">{{$tag->name}}</td>
                            <td style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">{{$tag->created_at->diffForhumans()}}</td>
                            <td style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;">{{$tag->updated_at->diffForhumans()}}</td>
                            <td style="  color: dimgray;
  text-shadow: 1px 1px 0px #000000;"> <a href="{{route('edit.tag',['id'=>$tag->id])}}">



                                    <i class="fa fa-pencil-alt" style="font-size: 20px;color: #6ed3cf"> </i>
                                </a> </td>
                            <td>
                                <a href="{{route('delete.tag',['id'=>$tag->id])}}"  >

                                    <i class="fa fa-trash-alt"  style="font-size: 20px;color:   #F66D61"> </i>

                                </a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <a style="" href="/tag/create"><h1><i style=" text-shadow: -7px 8px 2px #c54040, -3px 5px #c74b16; ;font-size: 55px;color: #6ed3cf;" class="fa fa-plus-circle" aria-hidden="true"></i></h1> </a>




            </div>
        </div>
    </div>








@stop