<html>

<body>


<ul>
@foreach ($disciplinas as $disciplina)
    <li>{{ $disciplina->titulo }} </li>
@endforeach
</ul>

</body>

</html>
