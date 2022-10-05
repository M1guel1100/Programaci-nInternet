<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">

</style>
<title>Index</title>
</head>

<body>
<h1>Listado de eventos
</h1>
<a href="/alumno/create">Nuevo Alumno</a>


<table border='1'>
    <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Codigo</th>
    </tr>
    @foreach($alumnos as $alumno)
    <tr>
    <td>
        <a href="alumno/{{$alumno->id}}">
        {{$alumno->id}}
    </td>
    <td>{{$alumno->nombre}}</td>
    <td>{{$alumno->correo}}</td>
    <td>{{$alumno->codigo}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>