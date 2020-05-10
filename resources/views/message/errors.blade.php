@if(count($errors))

	@foreach($errors->all() as $error) 
	<div class="container">
		<div class="alert alert-success bg-green">
			{{ $error }}
		</div>
	</div>
	@endforeach
@endif


