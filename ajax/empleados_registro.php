<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Registro de empleados</title>
  <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
  </head>
  <body>
		<form name="nuevo_empleado" action="" onsubmit="enviarDatosEmpleado(); return false">
			<h2>Nuevo empleado</h2>
				<table>
                <tr>
                	<td>Nombres</td><td><label><input name="nombre" type="text" /></label></td>
               	</tr>
                <tr>
					<td>Apellido</td><td><label><input type="text" name="apellido"></label></td>
				</tr>
                <tr>
                    <td>Web</td><td><label><input name="web" type="text" /></label></td>
				</tr>
                <tr>
                   	<td>&nbsp;</td><td><label><input type="submit" name="Submit" value="Grabar" /></label></td>
                </tr>
                </table>
		</form>
 
		<div id="resultado"><?php include('consulta.php');?></div>
 
    </body>
</html>