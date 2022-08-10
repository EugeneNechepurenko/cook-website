@extends('dashboard/layout')

@section('title', "Add recipes")

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <form class="form-horizontal" method="POST" action="{{route('dashboard-recipes-create')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row"><label for="title" class="col-sm-2 col-form-label">title</label><div class="col-sm-10"><input type="text" class="form-control" id="title" placeholder="title" name="title" ></div></div>
                        <div class="form-group row"><label for="category" class="col-sm-2 col-form-label">category</label><div class="col-sm-10"><input type="text" class="form-control" id="category" placeholder="category" name="category" ></div></div>
                        <div class="form-group row"><label for="total_time" class="col-sm-2 col-form-label">total_time</label><div class="col-sm-10"><input type="text" class="form-control" id="total_time" placeholder="total_time" name="total_time" ></div></div>
                        <div class="form-group row"><label for="active_time" class="col-sm-2 col-form-label">active_time</label><div class="col-sm-10"><input type="text" class="form-control" id="active_time" placeholder="active_time" name="active_time" ></div></div>
                        <div class="form-group row"><label for="difficulty" class="col-sm-2 col-form-label">difficulty</label><div class="col-sm-10"><input type="text" class="form-control" id="difficulty" placeholder="difficulty" name="difficulty" ></div></div>
                        <div class="form-group row"><label for="yields" class="col-sm-2 col-form-label">yields</label><div class="col-sm-10"><input type="text" class="form-control" id="yields" placeholder="yields" name="yields" ></div></div>
                        <div class="form-group row"><label for="kcal" class="col-sm-2 col-form-label">kcal</label><div class="col-sm-10"><input type="text" class="form-control" id="kcal" placeholder="kcal" name="kcal" ></div></div>
                        <div class="form-group row"><label for="price" class="col-sm-2 col-form-label">price</label><div class="col-sm-10"><input type="text" class="form-control" id="price" placeholder="price" name="price" ></div></div>
                        <div class="form-group row"><label for="cuisine" class="col-sm-2 col-form-label">cuisine</label><div class="col-sm-10"><input type="text" class="form-control" id="cuisine" placeholder="cuisine" name="cuisine" ></div></div>
                        <div class="form-group row"><label for="description" class="col-sm-2 col-form-label">description</label><div class="col-sm-10"><input type="text" class="form-control" id="description" placeholder="description" name="description" ></div></div>
                        <div class="form-group row"><label for="ingredients" class="col-sm-2 col-form-label">ingredients</label><div class="col-sm-10"><input type="text" class="form-control" id="ingredients" placeholder="ingredients" name="ingredients" ></div></div>
                        <div class="form-group row"><label for="steps" class="col-sm-2 col-form-label">steps</label><div class="col-sm-10"><input type="text" class="form-control" id="steps" placeholder="steps" name="steps" ></div></div>
                        <div class="form-group row"><label for="img" class="col-sm-2 col-form-label">img</label><div class="col-sm-10"><input type="text" class="form-control" id="img" placeholder="img" name="img" ></div></div>
                        <div class="form-group row"><label for="media" class="col-sm-2 col-form-label">media</label><div class="col-sm-10"><input type="text" class="form-control" id="media" placeholder="media" name="media" ></div></div>
                        <div class="form-group row"><label for="tags" class="col-sm-2 col-form-label">tags</label><div class="col-sm-10"><input type="text" class="form-control" id="tags" placeholder="tags" name="tags" ></div></div>
                  </div>
                    <div class="card-footer">
                        <a href="{{route('dashboard-recipes-all')}}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-info float-right">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection