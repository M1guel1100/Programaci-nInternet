<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">

</style>
<title>Contacto</title>
</head>

<body>
<h1>Contacto
</h1>

<form action="recibe-form" method="POST">
  @csrf

  <label for="codigo">Codigo:</label>
  <input type="text" id="codigo" name="codigo" value= "{{old('codigo') ?? $name}}">
  @error('name')
    <i>{{ $message }}</i>
  @enderror

  <label for="name">Nombre:</label>
  <input type="text" id="name" name="name" value= "{{old('name') ?? $name}}">
  @error('name')
    <i>{{ $message }}</i>
  @enderror
  <label for="email">Correo:</label>
  <input type="email" id="email" name="email" value= "{{old('email') ?? $name}}">
  @error('email')
    <i>{{ $message }}</i>
  @enderror
  <br>
  <label for="comentario">Comentario</label><br>
  <textarea name="comentario" rows="10" cols="40">{{old('comentario')}}</textarea><br>
  @error('comentario')
    <i>{{ $message }}</i>
  @enderror
  <br>
  <input type="submit" value="Submit">

<div class="nav" id="inicio"><a href="/">Inicio</a></div>
</body>
</html>
