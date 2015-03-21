<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de captura de datos</title>
  </head>
  <body><table>
    <form action="manejadorAlumno.php" method="post">
      <tr>
        <td>
          Colonia:
        </td>
        <td>
          <input type="text" name="Colonia">
         </td>
      </tr>
      <tr>
        <td>
         Poligono:
        </td>
        <td>
          <input type="text" name="Poligono">
        </td>
      </tr>
      <tr>
        <td>
          Numero de Casa:
        </td>
        <td>
          <input type="text" name="Numeo de Casa">
        </td>
      </tr>
      <tr>
        <td>
          Municipio:
        </td>
        <td>
          <input type="text" name="Municipio">
        </td>
      </tr>
      <tr>
        <td>
          Departamento:
        </td>
        <td>
          <input type="text" name="Departamento">
        </td>
      </tr>
      <tr>
        <td>
          Pais:
        </td>
        <td>
          <select name='Pais'>
            <option value=""></option>
            <option value="El Salvador">El Salvador</option>
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