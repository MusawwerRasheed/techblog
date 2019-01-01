
@extends('layouts.app')


@section('content')


    <div class="container" style="margin-left: -234px; width: 1339px; margin-top: -30px;">
        <div class="row justify-content-center">

            <div class="col-md-8">
                @if(count($errors)>0)

                    <ul class="list-group">

                        @foreach($errors->all() as $error)

                            <li class="list-group-item text-danger"
                                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                                {{$error}}

                            </li>
                        @endforeach
                    </ul>

                @endif
                <br>
                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div style="box-shadow: 0 1px 2px 0 rgba(1, 3, 0, 0), 0 1px 5px 0 rgba(0, 0, 0, 0.19);"
                         class="card-header">


                        <h1 style="  color: dimgray;
  text-shadow: 1px 1px 1px #000000;"><strong> Edit Post </strong> <i style="color: #17a2b8" class="fa fa-pencil-alt"> </i> <a href="/admin/posts/"><i  style=" float: right;color: #17a2b8" class="far fa-arrow-alt-circle-left"></i></a>
                        </h1>

                    </div>

                    <div class="card-body">

                        <form action="{{route('posts.update',['id'=>$posts->id])}}" method="post"
                              enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">

                                <label style="  color: dimgray;
  text-shadow: 0px 1px 1px #000000;" for="title"> Title</label>


                                <input style="  { background: rgba(1,200,1,1.3);box-shadow: 1px 1px 12px rgba(0,20,0,0.8);}

" type="text" value="{{$posts->title}}" name="title" class="form-control">

                            </div>


                            <div class="form-group">

    <label style="  color: dimgray;  text-shadow: 0px 1px 1px #000000;" for="content"> Content</label>
<textarea style=" { background: rgba(1,200,1,1.3);box-shadow: 1px 1px 12px rgba(0,20,0,0.8);}"
          name="content"     cols="5" rows="5" class="form-control"> {{$posts->content}}</textarea>
                            </div>

                            <div class="form-group">

                                <label style="  color: dimgray;
  text-shadow: 0px 1px 1px #000000;" for="featured"> Featured Image</label>
                                <input style="  { background: rgba(1,200,1,1.3);box-shadow: 1px 1px 12px rgba(0,20,0,0.8);}

" type="file" name="featured" class="form-control">

                            </div>

                            <div class="form-group">



                            <div class="form-group">

                                <div class="text-left">
                                    <button style="  { background: rgba(1,200,1,1.3);box-shadow: 1px 1px 12px rgba(0,20,0,0.8);}

" class="btn btn-success" type="submit"><i class="fas fa-plus-circle"></i></i> Update post                                     </button>
                                </div>
                            </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>


    </div>

@stop