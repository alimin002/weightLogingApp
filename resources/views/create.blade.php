@extends('main')
@section('content')
	<div class="content">
		<div class="row">
			<div class="col-md-6">
				<form name="frm-create" id="frm-create" action="{{url('weight_log/save')}}" method="post">
					{{ csrf_field() }}
					<h1>Add Data</h1>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Max</label> 
								<input type="text" placeholder="" value="" name="max" id="max" required="" class="form-control">
							</div>	
							<div class="form-group">
								<label>Min</label> 
								<input type="text" placeholder="" name="min" id="min" required="" class="form-control">
							</div>
							<div class="form-group">
								<label>Variance</label> 
								<input type="text" placeholder="" name="variance" id="variance" required="" class="form-control">
							</div>																
						</div>
						<div class="col-sm-12">
						<button class="btn btn-primary">Save</button>&nbsp;
						<a href="{{url('weight_log')}}"><button type="button" class="btn btn-primary">Back</button></a>
						</div>
					</form>			
			</div>
		</div>
	</div>
	<script>
			$("#min").change(function(){
					//alert( "Handler for .change() called." );
					var max= $("#max").val();
					var min= $("#min").val();
					var variance = max-min;
					$("#variance").val(variance);
			});
			
			$("#max").change(function(){
					//alert( "Handler for .change() called." );
					var max= $("#max").val();
					var min= $("#min").val();
					var variance = max-min;
					$("#variance").val(variance);
			});
			/**
		function getVariance(){
			var max= $("#max").val();
			var min= $("#min").val();
			var variance=0;
			$("#min").
			
		}
		**/
	</script>
@endsection							