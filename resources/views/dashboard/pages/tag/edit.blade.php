@extends('dashboard/layout')

@section('title', "Edit tags #".$tag->id)

@section('content')

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card card-secondary">
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">Horizontal Form</h3>--}}
{{--                </div>--}}
                <!-- /.card-header -->
                <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{route('dashboard-tag-update',['id'=>$tag->id])}}">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="Title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Title" placeholder="Title" name="title" value="{{$tag->title}}" required>
                </div>
            </div>
        </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="{{route('dashboard-tag-all')}}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-info float-right">Update</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>

    </div>
@endsection