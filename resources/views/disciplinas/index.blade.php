@extends ('master')

@section ('content')
        <a href="/disciplinas/create" class="btn btn-success" >Cadastrar disciplina</a>

        <ul>
        @foreach ($disciplinas as $disciplina)
            <li><a href="/disciplinas/{{ $disciplina->id}}"> {{ $disciplina->titulo }}</a> </li>
        @endforeach
        </ul>

@endsection
