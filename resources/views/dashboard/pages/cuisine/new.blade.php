@extends('dashboard/layout')

@section('title', "Add cuisines")

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <form class="form-horizontal" method="POST" action="{{route('dashboard-cuisine-create')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row"><label for="title" class="col-sm-2 col-form-label">title</label><div class="col-sm-10"><input type="text" class="form-control" id="title" placeholder="title" name="title" ></div></div>
                 </div>
                    <div class="card-footer">
                        <a href="{{route('dashboard-cuisine-all')}}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-info float-right">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection