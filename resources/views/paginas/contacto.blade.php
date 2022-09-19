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

<form action="/contacto" method="POST">
  @csrf
  
  <label for="nombre">Nombre:</label>
  <input type="text"  name="nombre" value= "{{old('nombre') ?? $nombre}}">
  @error('nombre')
    <i>{{ $message }}</i>
  @enderror
  <label for="correo">Correo:</label>
  <input type="text" name="correo" value= "{{old('correo') ?? $correo}}">
  @error('correo')
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
