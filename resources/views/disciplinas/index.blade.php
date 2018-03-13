@extends ('master')

@section ('content')

@auth
        <a href="/disciplinas/create" class="btn btn-success" >Cadastrar disciplina</a>
@endauth

        <ul>
        @foreach ($disciplinas as $disciplina)
            <li><a href="/disciplinas/{{ $disciplina->id}}"> {{ $disciplina->titulo }}</a> </li>
        @endforeach
        </ul>

@endsection
