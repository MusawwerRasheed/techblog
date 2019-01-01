@extends('layouts.app')


@section('content')


    <div class="container" style="margin-left: -234px; width: 1339px; margin-top: -30px;" >
        <div class="row justify-content-center">

            <div class="col-md-8">
                @if(count($errors) > 0)

                    <ul class="list-group" >

                        @foreach($errors->all() as $error)

                            <li class="list-group-item text-danger" >

                                {{$error}}

                            </li>
                        @endforeach
                    </ul>

                @endif

                <br>
                <div  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"class="card">
                    <div class="card-header">


                        <h1 style="  color: dimgray;
  text-shadow: 1px 1px 1px #000000;"> <strong> Edit Category <i style="color: #FB9866" class="fa fa-pencil-alt"></i></strong>
                           <a href=""> <i  style=" float: right;color:#FB9866" class="far fa-arrow-alt-circle-left"></i></a>
                        </h1>

                    </div>

                    <div class="card-body">

                        <form action =" {{route('category.update',['id'=>$category->id])}}" method="post" >
                            {{csrf_field()}}

                            <div class="form-group">

                                <label style="  color: dimgray;
  text-shadow: 1px 1px 1px #000000;"for="name"> Name</label>
                                <input  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"type="text"  name="name" value="{{$category->name}}" class="form-control">

                            </div>


                            <div class="form-group">

                                <div  class="text-left">
                                    <button  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="btn btn-success" type="submit"><i class="fa fa-pencil-alt"></i> Update Category</button>
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