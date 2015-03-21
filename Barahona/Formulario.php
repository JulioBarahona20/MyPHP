<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de capura de datos</title>
  </head>
  <body><table>
    <form action="manejadorAlumno.php" method="post">
      <tr>
        <td>
          Carnet:
        </td>
        <td>
          <input type="text" name="carnet">
         </td>
      </tr>
      <tr>
        <td>
         Nombre:
        </td>
        <td>
          <input type="text" name="nombre">
        </td>
      </tr>
      <tr>
        <td>
          Apellido:
        </td>
        <td>
          <input type="text" name="apellido">
        </td>
      </tr>
      <tr>
        <td>
          Fecha de Nacimiento:
        </td>
        <td>
          <input type="text" name="fecha de nacimiento">
        </td>
      </tr>
      <tr>
        <td>
          Direccion:
        </td>
        <td>
          <input type="text" name="direccion">
        </td>
      </tr>
      <tr>
        <td>
          Seccion:
        </td>
        <td>
          <select name='seccion'>
            <option value=""></option>
            <option value="sistema">Sistemas</option>
            <option value="manto">Mantenimiento</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name'bot' value='Enviar'>
        </td>
      </tr>
    </form>
  </body>
</html>