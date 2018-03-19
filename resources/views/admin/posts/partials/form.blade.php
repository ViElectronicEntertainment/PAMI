{{ Form::hidden('user_id',auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('category_id','Categorias') }}
	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('name', 'Nombre de la Entrada') }}
	{{ Form::text('name',null, ['class' => 'form-control','id' => 'name'])}}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug',null, ['class' => 'form-control','id' => 'slug'])}}
</div>
<div class="form-group">
	{{ Form::label('file', 'Imagen') }}
	{{ Form::file('file') }}
</div>
<div class="form-group">
	{{ Form::label('status', 'Estado')}}
	<label>
		{{ Form::radio('status', 'PUBLISHED')}} Publicado
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT')}} Borrador
	</label>
</div>
<div class="form-group">
	{{ Form::label('tags','Etiquetas') }}
	<div>
		@foreach($tags as $tag)
			<label>
				{{ Form::checkbox('tags[]', $tag->id) }}{{ $tag->name }}
			</label>
		@endforeach
	</div>
</div>
<div class="form-group">
	{{ Form::label('excerpt', 'Extracto') }}
	{{ Form::textarea('excerpt',null, ['class' => 'form-control', 'rows' => '2'])}}
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
<script src="{{ asset('../node_modules/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$('#slug').val(text);
			}
		});
	});
	CKEDITOR.replace('body');
</script>
@endsection