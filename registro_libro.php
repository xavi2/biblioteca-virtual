<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="styles/regStyle.css">

<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
ul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
</style>
<![endif]-->
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
</head>

<body>

<div class="container">
	<div style="background:#FF3333;height:100px">
	</div>
    
    <div style="height:600px" align="center">
	<br>
	<form action="" method="post">
    	<div id="TabbedPanels1" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">Registrar Libro</li>
        <li class="TabbedPanelsTab" tabindex="0">Ingresar Pagos</li>
        </ul>
        	<div class="TabbedPanelsContentGroup">
          		<div class="TabbedPanelsContent">
          		<fieldset><legend>Registre el libro que desee</legend>
					<table style="border:2px solid;border-color:#06C" >
					  <tr >
					    <td align="right" style="background:#06F;color:#FFF">Título:</td>
					    <td><input name="" type="text"></td>
					  </tr>
					  <tr>
					    <td align="right" style="background:#06F;color:#FFF">Nombre:</td>
					    <td><input name="" type="text"></td>
					  </tr>
					  <tr>
					    <td align="right" style="background:#06F;color:#FFF">Autor:</td>
					    <td><input name="" type="text"></td>
					  </tr>
					  <tr>
					    <td align="right" style="background:#06F;color:#FFF">Edición:</td>
					    <td><input name="" type="text"></td>
					  </tr>
					    <tr >
					    <td align="right" style="background:#06F;color:#FFF">Año:</td>
					    <td><input name="" type="text"></td>
					  </tr>
					  <tr>
					    <td align="right" style="background:#06F;color:#FFF">Género:</td>
					    <td><input name="" type="text"></td>
					  </tr>
					  <tr>
					    <td align="right" style="background:#06F;color:#FFF">asasdg:</td>
					    <td><input name="" type="text"></td>
					  </tr>
					  <tr>
					    <td align="right" style="background:#06F;color:#FFF">sdfgd:</td>
					    <td><input name="" type="text"></td>
					  </tr>
					  <tr align="center">
					    <td><input name="enviar" type="submit" value="Registrar"></td>
					    <td><input name="deshacer" type="reset" value="Restablecer"></td>
					  </tr>
					</table>
				</fieldset>
                </div>
			</div>
		</div>
    </form>
	</div >
    
    <div style="background:#F63;height:70px">
    	<p align="right">
        Cochabamba Bolivia
		</p>
	</div>

</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
