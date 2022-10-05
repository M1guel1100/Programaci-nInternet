<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">

</style>
<title>Alumno</title>
</head>

<body>
<h1>Alumno
</h1>


<form action="/alumno" method="POST">
  @csrf
  
  <label for="nombre">Nombre:</label>
  <input type="text"  name="nombre">
  @error('nombre')
    <i>{{ $message }}</i>
  @enderror
  <label for="correo">Correo:</label>
  <input type="text" name="correo">
  @error('correo')
    <i>{{ $message }}</i>
  @enderror
  <br>
  <label for="codigo">Codigo:</label>
  <input type="text"  name="codigo">
  @error('codigo')
    <i>{{ $message }}</i>
  @enderror
  <br>
  <input type="submit" value="Submit">
  
<div class="nav" id="inicio"><a href="/alumno">Inicio</a></div>
</body>
</html>