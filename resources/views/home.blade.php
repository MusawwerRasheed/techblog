@extends('layouts.app')

@section('content')
    <div class="container" style="margin-left: -234px; width: 1339px; margin-top: -7px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div style="box-shadow: 0 1px 2px 0 rgba(1, 3, 0, 0), 0 1px 5px 0 rgba(0, 0, 0, 0.19);"
                         class="card-header"><h2 style="  color: dimgrey;
  text-shadow: 1px 1px 2px #000000;"><strong>USER Dashboard</strong></h2></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in as <strong> User</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
