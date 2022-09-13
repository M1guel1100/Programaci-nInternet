<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">

</style>
<title>Contacto</title>
</head>

<body>

<div class="nav" id="inicio"><a href="/">Inicio</a></div>

<h1>Contacto
</h1>
<form id="form1" name="form1" method="POST" action="/recibe-form-contacto">
  @csrf
  <label for="Nombre">Nombre</label>
  <input type="text" name="Nombre" id="Nombre" />
  
  <label for="email">Email</label>
  <input type="email" name="email" id="email" />

  <label for="pwd">Password:</label>
  <input type="password" id="pwd" name="pwd" minlength="4">
    
  <p>Comentario: 
    <input name="comentario" type="text" id="comentario" value="" size="45" />
  </p>

  <p>
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
