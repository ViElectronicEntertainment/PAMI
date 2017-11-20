@if(Session::has('info'))
<div class="alert alert-info" role="alert" id="div-info">
	<button type="button" class="class" data-dismiss="alert">
		&times;
	</button>
	{{ Session::get('info') }}
</div>
@endif