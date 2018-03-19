<div class="form-group">
	{{ Form::label('name', 'Nombre de la Categoria') }}
	{{ Form::text('name',null, ['class' => 'form-control','id' => 'name'])}}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug',null, ['class' => 'form-control','id' => 'slug'])}}
</div>
<div class="form-group">
	{{ Form::label('body', 'Descripcion') }}
	{{ Form::textarea('body',null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar',['class' => 'btn btn-primary'])}}
</div>

@section('scripts')
<script src="{{ asset('js/jquery.stringtoslug.min.js') }}"></script>
<script src="{{ asset('../node_modules/speakingurl/speakingurl.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$('#slug').val(text);
			}
		});
	});
</script>
@endsection