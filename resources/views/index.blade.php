
@extends('main')
@section('title', 'Raw Material')
@section('content')
<div class="content">
<div class="row">
	<h2>Data Weigth Log</h2>	
	
			@if(session()->has('message'))							
					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>

						<i class="ace-icon fa fa-check green"></i>

						{{session()->get('message')}}
					</div>
				@endif
	
	<div class="col-sm-6" style="marin-top:100px;">
	{{--
			<div class="row">
			<form action="{{url('weight_log')}}" method="post">
				{{ csrf_field() }}
				<input type="text" name="keyword" class="form-control" placeholder="type keyword and preess enter to search"/><br>
				</form>
			</div>
	--}}
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Date</th>
				<th>Max</th>
				<th>Min</th>
				<th>Variance</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		@foreach($data as $key=>$rows)
			<tr>
				<td>{{$rows->date}}</td>
				<td>{{$rows->max}}</td>
				<td>{{$rows->min}}</td>
				<td>{{$rows->variance}}</td>
				<td>
				<a href="{{url('weight_log/display/'.$rows['weight_log_id'])}}"><button class="btn btn-primary">Show</button></a>
				<a href="{{url('weight_log/edit/'.$rows['weight_log_id'])}}"><button class="btn btn-primary">Edit</button></a>
				<a href="{{url('weight_log/delete/'.$rows['weight_log_id'])}}"><button class="btn btn-primary">Delete</button></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	<div class="row">
	<ul class="pagination">
		{{$data->links()}}
	</ul>
	</div>
	<div>
	<a href="{{url('weight_log/create')}}"><button class="btn btn-primary">Add</button></a>
	</div>
	</div>
@endsection							