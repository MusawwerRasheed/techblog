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

           <div style="box-shadow: 0 1px 2px 0 rgba(1, 3, 0, 0), 0 1px 5px 0 rgba(0, 0, 0, 0.19);" class="card-header" >


               <h1 style="  color: dimgray;
  text-shadow: 1px 1px 1px #000000;"><strong> {{$posts->title}} <i style="color: #17a2b8" class="fa fa-newspaper"></i>     <a href="/admin/posts/"><i  style=" float: right;color: #17a2b8" class="far fa-arrow-alt-circle-left"></i></a></strong></h1>

                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <img  style="  padding-bottom: 10px;padding-left: 13px;
                              padding-top: 10px ;height: 200px;width: 200px;" class="card-img-top" src="{{$posts->featured}}" alt="Card image">
                        </div>

                        <div class="col-md-4" style="padding-top: 10px">
                            <div class="card"  style=" padding-top: -23px ;width: 400px;;margin-right: -70px;" >

                                <div class="card-body" >
                                    <label > Title</label>
                                    <h4 style=" margin-top: -23px ;text-align: right;padding-right: 33px" class="card-title">{{$posts->title}}</h4>
                                    <label > Content</label>
                                    <p style="text-align: right" class="card-text">{{$posts->content}}</p>
                                    {{--<a href="#" class="btn btn-primary">See Profile</a>--}}
                                </div>
                            </div>
                        </div>


            </div>

        </div>


                {{--<img src="{{$posts->featured}}" height= 250px" width="200">--}}

                {{--<labe style="  color: dimgray;--}}
  {{--text-shadow: 0px 1px 1px #000000;"> Title</labe>--}}

                {{--<div class="card-body" style="  margin-right: -233px;margin-right: -3px; margin-top: 3px;height: 50px;width: 200px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >--}}
                    {{--<h3 style="   padding-top: -233px;color: dimgray;--}}
                    {{--text-shadow: 0px 1px 1px #000000;"> {{$posts->title}}</h3>--}}

                {{--</div>--}}
{{--<br>--}}
                {{--<label style="  color: dimgray;--}}
  {{--text-shadow: 0px 1px 1px #000000;"> Content</label>--}}
                {{--<div class="card-body" style="  margin-right: -233px;margin-right: -3px; margin-top: 3px;height: 200px;width: 650px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >--}}
                    {{--<h4 style="  color: dimgray;--}}
                    {{--text-shadow: 0px 1px 1px #000000;"> {{$posts->content}}</h4>--}}

                {{--</div>--}}
    {{--</div>--}}



@stop