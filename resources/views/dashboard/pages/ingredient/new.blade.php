@extends('dashboard/layout')

@section('title', "Add ingredients")

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <form class="form-horizontal" method="POST" action="{{route('dashboard-ingredient-create')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row"><label for="title" class="col-sm-2 col-form-label">title</label><div class="col-sm-10"><input type="text" class="form-control" id="title" placeholder="title" name="title" ></div></div>
                        <div class="form-group row"><label for="amount" class="col-sm-2 col-form-label">amount</label><div class="col-sm-10"><input type="text" class="form-control" id="amount" placeholder="amount" name="amount" ></div></div>
                 </div>
                    <div class="card-footer">
                        <a href="{{route('dashboard-ingredient-all')}}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-info float-right">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection