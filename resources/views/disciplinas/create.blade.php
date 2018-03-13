@extends ('master')

@section ('content')
<form method="POST" action="/disciplinas">
{{ csrf_field() }}


<div class="form-group">
 <label for="titulo">Título</label>
 <input type="text" class="form-control" name="titulo">
 </div>


Ementa: <textarea name="ementa"> </textarea> <br> 
<button type="submit" class="btn btn-success"> Salvar</button>
</form>

@endsection
