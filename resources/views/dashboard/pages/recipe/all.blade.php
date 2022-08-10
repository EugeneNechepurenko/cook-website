@extends('dashboard/layout')

@section('title', "recipes")

@section('additional_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
@endsection
@section('additional_js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
   <script>
	   $(document).ready( function () {
		   $('#myTable').DataTable({
			   language: {
				   url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/ru.json'
			   }
		   } );
	   } );
   </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All recipes <a href="{{route('dashboard-recipes-add')}}"><i class="fa fa-plus"></i></a></h3>
                </div>
                <div class="card-body table-responsive">
                    <table id="myTable" class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>slug</th>
                                <th>IMG</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recipes as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td><img src="{{$item->getFirstMediaUrl('img', 'thumb')}}" width="120px"></td>
                                    <td class="action">
                                        <a href="{{route('dashboard-recipes-edit',['id'=>$item->id])}}"><i class="fa fa-pen"></i></a>
                                        <a href="{{route('dashboard-recipes-delete',['id'=>$item->id])}}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

