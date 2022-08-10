@extends('dashboard/layout')

@section('title', "Add recipes")

@section('additional_css')
    @livewireStyles
    <style>
		.bootstrap-tagsinput {
			background-color: #fff;
			border: 1px solid #ccc;
			box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
			display: inline-block;
			padding: 4px 6px;
			color: #555;
			vertical-align: middle;
			border-radius: 4px;
			max-width: 100%;
			line-height: 22px;
			cursor: text;    min-height: 40px;

		}
		.label {
			display: inline;
			padding: .2em .6em .3em;
			font-size: 75%;
			font-weight: 700;
			line-height: 1;
			color: #fff;
			text-align: center;
			white-space: nowrap;
			vertical-align: baseline;
			border-radius: .25em;
		}
		.label-info {
			background-color: #5bc0de;
		}
		.bootstrap-tagsinput .tag {
			margin-right: 2px;
			color: white;
		}
		.bootstrap-tagsinput .tag [data-role="remove"] {
			margin-left: 8px;
			cursor: pointer;
		}
		.bootstrap-tagsinput .tag [data-role="remove"]:after {
			content: "x";
			padding: 0 2px;
		}
    </style>
@endsection

@section('content')
    @livewire('recipe-create-form-component')
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card card-secondary">--}}
{{--                <form class="form-horizontal" id="recipe" method="POST" action="{{route('dashboard-recipes-create')}}">--}}
{{--                    @csrf--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="form-group row"><label for="title" class="col-sm-2 col-form-label">title</label><div class="col-sm-10"><input type="text" class="form-control" id="title" placeholder="title" name="title" ></div></div>--}}
{{--                        <div class="form-group row"><label for="category" class="col-sm-2 col-form-label">category</label><div class="col-sm-10"><input type="text" class="form-control" id="category" placeholder="category" name="category" ></div></div>--}}
{{--                        <div class="form-group row"><label for="total_time" class="col-sm-2 col-form-label">total_time</label><div class="col-sm-10"><input type="text" class="form-control" id="total_time" placeholder="total_time" name="total_time" ></div></div>--}}
{{--                        <div class="form-group row"><label for="active_time" class="col-sm-2 col-form-label">active_time</label><div class="col-sm-10"><input type="text" class="form-control" id="active_time" placeholder="active_time" name="active_time" ></div></div>--}}
{{--                        <div class="form-group row"><label for="difficulty" class="col-sm-2 col-form-label">difficulty</label><div class="col-sm-10"><input type="text" class="form-control" id="difficulty" placeholder="difficulty" name="difficulty" ></div></div>--}}
{{--                        <div class="form-group row"><label for="yields" class="col-sm-2 col-form-label">yields</label><div class="col-sm-10"><input type="text" class="form-control" id="yields" placeholder="yields" name="yields" ></div></div>--}}
{{--                        <div class="form-group row"><label for="kcal" class="col-sm-2 col-form-label">kcal</label><div class="col-sm-10"><input type="text" class="form-control" id="kcal" placeholder="kcal" name="kcal" ></div></div>--}}
{{--                        <div class="form-group row"><label for="price" class="col-sm-2 col-form-label">price</label><div class="col-sm-10"><input type="text" class="form-control" id="price" placeholder="price" name="price" ></div></div>--}}
{{--                        <div class="form-group row"><label for="cuisine" class="col-sm-2 col-form-label">cuisine</label><div class="col-sm-10"><input type="text" class="form-control" id="cuisine" placeholder="cuisine" name="cuisine" ></div></div>--}}
{{--                        <div class="form-group row"><label for="description" class="col-sm-2 col-form-label">description</label><div class="col-sm-10"><input type="text" class="form-control" id="description" placeholder="description" name="description" ></div></div>--}}
{{--                        <div class="form-group row"><label for="ingredients" class="col-sm-2 col-form-label">ingredients</label><div class="col-sm-10"><input type="text" class="form-control" id="ingredients" placeholder="ingredients" name="ingredients" ></div></div>--}}
{{--                        <div class="form-group row"><label for="steps" class="col-sm-2 col-form-label">steps</label><div class="col-sm-10"><input type="text" class="form-control" id="steps" placeholder="steps" name="steps" ></div></div>--}}
{{--                        <div class="form-group row"><label for="img" class="col-sm-2 col-form-label">img</label><div class="col-sm-10"><input type="text" class="form-control" id="img" placeholder="img" name="img" ></div></div>--}}
{{--                        <div class="form-group row"><label for="media" class="col-sm-2 col-form-label">media</label><div class="col-sm-10"><input type="text" class="form-control" id="media" placeholder="media" name="media" ></div></div>--}}
{{--                        <div class="form-group row"><label for="tags" class="col-sm-2 col-form-label">tags</label><div class="col-sm-10"><input type="text" class="form-control" id="tags" placeholder="tags" name="tags" ></div></div>--}}
{{--                  </div>--}}
{{--                    <div class="card-footer">--}}
{{--                        <a href="{{route('dashboard-recipes-all')}}" class="btn btn-default">Back</a>--}}
{{--                        <button type="submit" class="btn btn-info float-right">Add</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@section('additional_js')
    @livewireScripts
@endsection