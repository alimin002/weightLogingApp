
@extends('main')
@section('title', 'Raw Material')
@section('content')
	<div class="content">
		<div class="row">
			<div class="col-md-6">
				<form name="frm-edit" id="frm-edit" action="{{url('weight_log/destroy')}}" method="post">
					{{ csrf_field() }}
					<h1>Delete</h1>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>The following data will be deleted are you sure to continue this process?</label> 
								</br>
								<label>Max</label> 
								<input readonly="readonly"  type="text" placeholder="" value="{{$data['max']}}" name="max" id="max" required="" class="form-control">
							</div>	
							<div class="form-group">
								<label>Min</label> 
								<input readonly="readonly"  type="text" placeholder="" value="{{$data['min']}}" name="min" id="min" required="" class="form-control">
							</div>
							<div class="form-group">
								<label>Variance</label> 
								<input readonly="readonly"  type="text" placeholder=""  value="{{$data['variance']}}" name="variance" id="variance" required="" class="form-control">
							</div>																
						</div>
						<div class="col-sm-12">						
							<button class="btn btn-primary">Delete</button>&nbsp;<a href="{{url('weight_log')}}"><button type="button" class="btn btn-primary">Back</button></a>
						</div>
						<input  type="hidden" placeholder="" value="{{$data['weight_log_id']}}" name="weight_log_id" id="weight_log_id" required="" class="form-control">
					</form>			
			</div>
		</div>
	</div>
@endsection							