<?php
/*   require_once("sesion.class.php");
   $sesion = new sesion();
   $usuario = $sesion->get("usuario");
   if( $usuario == false )  {
      header("Location: login.php");
   }  else  {
   	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="estilos/entrada.css" rel="stylesheet" type="text/css">
		<script type="text/javascript">
    		function eventos(){
        		var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_e = document.getElementById("insertar_e");
        		var contenedor_m_e = document.getElementById("modificar_e");
        		var contenedor_i_a = document.getElementById("insertar_a");
        		var contenedor_m_a = document.getElementById("modificar_a");
        		var contenedor_i_f = document.getElementById("insertar_f");
        		var contenedor_m_f = document.getElementById("modificar_f");
        		var contenedor_i_v = document.getElementById("insertar_v");
        		var contenedor_m_v = document.getElementById("modificar_v");
        		
        		if(contenedor_e.style.display != "block"){
        			
        		contenedor_e.style.display = "block";
        		contenedor_a.style.display = "none";
        		contenedor_f.style.display = "none";
        		contenedor_v.style.display = "none";
        		contenedor_i_e.style.display = "none";
        		contenedor_m_e.style.display = "none";
        		contenedor_i_a.style.display = "none";
        		contenedor_m_a.style.display = "none";
        		contenedor_i_f.style.display = "none";
        		contenedor_m_f.style.display = "none";
        		contenedor_i_v.style.display = "none";
        		contenedor_m_v.style.display = "none";
        		}else{
        			contenedor_e.style.display = "none";
        			contenedor_i_e.style.display = "none";
        			contenedor_m_e.style.display = "none";
        		}
        		return true;
    		}
    		function insertar_e(){
    			var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_e = document.getElementById("insertar_e");
        		var contenedor_m_e = document.getElementById("modificar_e");
        	
        		if(contenedor_i_e.style.display != "block"){
        			
        		contenedor_e.style.display = "block";
        		contenedor_a.style.display = "none";
        		contenedor_f.style.display = "none";
        		contenedor_v.style.display = "none";
        		contenedor_i_e.style.display = "block";
           		}else{
        			
        			contenedor_i_e.style.display = "none";
        			contenedor_m_e.style.display = "none";
        		}
        		return true;
    		}
    		function modificar_e(){
    			var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_e = document.getElementById("insertar_e");
        		var contenedor_m_e = document.getElementById("modificar_e");
        	
        		if(contenedor_m_e.style.display != "block"){
        			
        		contenedor_e.style.display = "block";
        		contenedor_a.style.display = "none";
        		contenedor_f.style.display = "none";
        		contenedor_v.style.display = "none";
        		contenedor_i_e.style.display = "none";
        		contenedor_m_e.style.display = "block";
           		}else{
        			
        			contenedor_i_e.style.display = "none";
        			contenedor_m_e.style.display = "none";
        		}
        		return true;
    		}
    		
    		function albums(){
        		var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_e = document.getElementById("insertar_e");
        		var contenedor_m_e = document.getElementById("modificar_e");
        		var contenedor_i_a = document.getElementById("insertar_a");
        		var contenedor_m_a = document.getElementById("modificar_a");
        		var contenedor_i_f = document.getElementById("insertar_f");
        		var contenedor_m_f = document.getElementById("modificar_f");
        		var contenedor_i_v = document.getElementById("insertar_v");
        		var contenedor_m_v = document.getElementById("modificar_v");
        		
        		if(contenedor_a.style.display != "block"){
        			
        		contenedor_e.style.display = "none";
        		contenedor_a.style.display = "block";
        		contenedor_f.style.display = "none";
        		contenedor_v.style.display = "none";
        		contenedor_i_e.style.display = "none";
        		contenedor_m_e.style.display = "none";
        		contenedor_i_a.style.display = "none";
        		contenedor_m_a.style.display = "none";
        		contenedor_i_f.style.display = "none";
        		contenedor_m_f.style.display = "none";
        		contenedor_i_v.style.display = "none";
        		contenedor_m_v.style.display = "none";
        		}else{
        			contenedor_e.style.display = "none";
        			contenedor_i_e.style.display = "none";
        			contenedor_m_e.style.display = "none";
        		}
        		return true;
    		
    		}
    		function insertar_a(){
    			var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_a = document.getElementById("insertar_a");
        		var contenedor_m_a = document.getElementById("modificar_a");
        	
        		if(contenedor_i_a.style.display != "block"){
        			
        		contenedor_e.style.display = "none";
        		contenedor_a.style.display = "block";
        		contenedor_f.style.display = "none";
        		contenedor_v.style.display = "none";
        		contenedor_i_a.style.display = "block";
        		contenedor_m_a.style.display = "none";
           		}else{
        			
        			contenedor_i_a.style.display = "none";
        			contenedor_m_a.style.display = "none";
        		}
        		return true;
    		}
    		function modificar_a(){
    			var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_a = document.getElementById("insertar_a");
        		var contenedor_m_a = document.getElementById("modificar_a");
        	
        		if(contenedor_m_a.style.display != "block"){
        			
        		contenedor_e.style.display = "none";
        		contenedor_a.style.display = "block";
        		contenedor_f.style.display = "none";
        		contenedor_v.style.display = "none";
        		contenedor_i_a.style.display = "none";
        		contenedor_m_a.style.display = "block";
           		}else{
        			
        			contenedor_i_a.style.display = "none";
        			contenedor_m_a.style.display = "none";
        		}
        		return true;
    		}
    		function fotos(){
        		var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_e = document.getElementById("insertar_e");
        		var contenedor_m_e = document.getElementById("modificar_e");
        		var contenedor_i_a = document.getElementById("insertar_a");
        		var contenedor_m_a = document.getElementById("modificar_a");
        		var contenedor_i_f = document.getElementById("insertar_f");
        		var contenedor_m_f = document.getElementById("modificar_f");
        		var contenedor_i_v = document.getElementById("insertar_v");
        		var contenedor_m_v = document.getElementById("modificar_v");
        		
        		if(contenedor_f.style.display != "block"){
        			
        		contenedor_e.style.display = "none";
        		contenedor_f.style.display = "block";
        		contenedor_a.style.display = "none";
        		contenedor_v.style.display = "none";
        		contenedor_i_e.style.display = "none";
        		contenedor_m_e.style.display = "none";
        		contenedor_i_a.style.display = "none";
        		contenedor_m_a.style.display = "none";
        		contenedor_i_f.style.display = "none";
        		contenedor_m_f.style.display = "none";
        		contenedor_i_v.style.display = "none";
        		contenedor_m_v.style.display = "none";
        		}else{
        			contenedor_f.style.display = "none";
        			contenedor_i_f.style.display = "none";
        			contenedor_m_f.style.display = "none";
        		}
        		return true;
    		
    		}
    		function insertar_f(){
    			var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_f = document.getElementById("insertar_f");
        		var contenedor_m_f = document.getElementById("modificar_f");
        	
        		if(contenedor_i_f.style.display != "block"){
        			
        		contenedor_e.style.display = "none";
        		contenedor_a.style.display = "none";
        		contenedor_f.style.display = "block";
        		contenedor_v.style.display = "none";
        		contenedor_i_f.style.display = "block";
        		contenedor_m_f.style.display = "none";
           		}else{
        			
        			contenedor_i_f.style.display = "none";
        			contenedor_m_f.style.display = "none";
        		}
        		return true;
    		}
    		
    		function modificar_f(){
    			var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_f = document.getElementById("insertar_f");
        		var contenedor_m_f = document.getElementById("modificar_f");
        	
        		if(contenedor_m_f.style.display != "block"){
        			
        		contenedor_e.style.display = "none";
        		contenedor_a.style.display = "none";
        		contenedor_f.style.display = "block";
        		contenedor_v.style.display = "none";
        		contenedor_i_f.style.display = "none";
        		contenedor_m_f.style.display = "block";
           		}else{
        			
        			contenedor_i_f.style.display = "none";
        			contenedor_m_f.style.display = "none";
        		}
        		return true;
    		}
    		function videos(){
        		var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_f_e = document.getElementById("insertar_e");
        		var contenedor_f_a = document.getElementById("formulario_a");
        		var contenedor_f_f = document.getElementById("formulario_f");
        		var contenedor_f_v = document.getElementById("formulario_v");
        		if(contenedor_e.style.display != "block"){
        			
        		contenedor_v.style.display = "block";
        		contenedor_a.style.display = "none";
        		contenedor_f.style.display = "none";
        		contenedor_e.style.display = "none";
        		contenedor_f_e.style.display = "none";
        		contenedor_f_a.style.display = "none";
        		contenedor_f_f.style.display = "none";
        		
        		}else{
        			contenedor_v.style.display = "none";
        			contenedor_f_v.style.display = "none";
        		}
        		return true;
    		}
    		function insertar_v(){
    			var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_v = document.getElementById("insertar_v");
        		var contenedor_m_v = document.getElementById("modificar_v");
        	
        		if(contenedor_i_v.style.display != "block"){
        			
        		contenedor_e.style.display = "none";
        		contenedor_a.style.display = "none";
        		contenedor_f.style.display = "none";
        		contenedor_v.style.display = "block";
        		contenedor_i_v.style.display = "block";
        		contenedor_m_v.style.display = "none";
           		}else{
        			
        			contenedor_i_v.style.display = "none";
        			contenedor_m_v.style.display = "none";
        		}
        		return true;
    		}
    		function modificar_v(){
    			var contenedor_e = document.getElementById("eventos");
        		var contenedor_a = document.getElementById("albums");
        		var contenedor_f = document.getElementById("fotos");
        		var contenedor_v = document.getElementById("videos");
        		var contenedor_i_v = document.getElementById("insertar_v");
        		var contenedor_m_v = document.getElementById("modificar_v");
        	
        		if(contenedor_m_v.style.display != "block"){
        			
        		contenedor_e.style.display = "none";
        		contenedor_a.style.display = "none";
        		contenedor_f.style.display = "none";
        		contenedor_v.style.display = "block";
        		contenedor_i_v.style.display = "none";
        		contenedor_m_v.style.display = "block";
           		}else{
        			
        			contenedor_i_v.style.display = "none";
        			contenedor_m_v.style.display = "none";
        		}
        		return true;
    		}
    		
		</script>
		<title></title>
	</head>
		<body>
			<a id="boton_salir" href="index.php"><img border=0 src="imagenes/salir2.png"></a>
			
			<div id='menu_principal'>
				<ul>
				   <li><a id="li_eventos" onclick="eventos();"><span>Eventos</span></a></li>
				   <li><a id="li_albums" onclick="albums();"><span>Albums</span></a></li>
				   <li><a id="li_fotos" onclick="fotos();"><span>Fotos</span></a></li>
				   <li><a id="li_videos" onclick="videos();"><span>Videos</span></a></li>
				</ul>
			</div>
			
			<div id="eventos">
				<b>EVENTOS</b>
				<div id='menu_vertical'>
					<ul>
					   <li class='a'><a href='#'><span>Ver eventos</span></a></li>
					   <li><a href='#' onClick="insertar_e();"><span>Insertar evento</span></a></li>
					   <li><a href='#' onClick="modificar_e();"><span>Modificar evento</span></a></li>
					   <li><a href='#'><span>Eliminar evento</span></a></li>
					</ul>
					  
				</div>
			</div>
			
			<div id="albums">
				<b>ALBUMS</b>
				<div id='menu_vertical'>
					<ul>
					   <li class='active'><a href='#'><span>Ver albums</span></a></li>
					   <li><a href='#' onClick="insertar_a();"><span>Insertar album</span></a></li>
					   <li><a href='#' onClick="modificar_a();"><span>Modificar album</span></a></li>
					   <li><a href='#'><span>Eliminar album</span></a></li>
					</ul>
				</div>
			</div>
			<div id="fotos">
				<b>FOTOS</b>
				<div id='menu_vertical'>
					<ul>
					   <li class='active'><a href='#'><span>Ver fotos</span></a></li>
					   <li><a href='#'onClick="insertar_f();"><span>Subir foto</span></a></li>
					   <li><a href='#'onClick="modificar_f();"><span>Cambiar foto</span></a></li>
					   <li><a href='#'><span>Eliminar foto</span></a></li>
					</ul>
				</div>
			</div>
			<div id="videos">
				<b>VIDEOS</b>
				<div id='menu_vertical'>
					<ul>
					   <li class='active'><a href='#'><span>Ver videos</span></a></li>
					   <li><a href='#' onClick="insertar_v();"><span>Subir video</span></a></li>
					   <li><a href='#' onClick="modificar_v();"><span>Cambiar video</span></a></li>
					   <li><a href='#'><span>Eliminar video</span></a></li>
					</ul>
				</div>
			</div>
			<div> 	
						<form  id="insertar_e" action="entrada.php" method="post" name="form_e">
						<table width="400" id="tabla_e">
							<tr>
								<td><h3 id="titulo_f"></h3></td>
							</tr>
						  <tr>				
							<td><b>Nombre del evento</b></td> 
						 </tr>
						 <tr>
							<td><input type="text" name="nombre_e"/></td>
						
						  </tr>
						  <tr>
							<td><b>Nombre del grupo / DJ</b></td>
							</tr>
						 <tr> 
							
							<td><select></select></td>
						  </tr>
						
						  <tr>
							<td><b>Fecha</b></td>
							
							</tr>
						 <tr>
							<td><input type="text" name="fecha_e"/></td>
						  </tr>
						
						  <tr>
							<td><b>Descripción</b></td>
							
							</tr>
						 <tr>
							<td><textarea rows="5" cols="40" name="descripcion_e"/></textarea></td>
						  </tr>
						  <tr>
					<td><button type="submit" name="" value="Entrar" class="css3button">Aceptar</button></td>
						  </tr>
						 </table> 
						</form> 
					</div>
					<div> 	
						<form  id="modificar_e" action="entrada.php" method="post" name="form_e">
						<table width="400" id="tabla_e">
							<tr>
								<td><h3 id="titulo_f"></h3></td>
							</tr>
						  <tr>				
							<td><b>Nombre del evento</b></td> 
						 </tr>
						 <tr>
							<td><input type="text" name="nombre_e"/></td>
						
						  </tr>
						  <tr>
							<td><b>Nombre del grupo / DJ</b></td>
							</tr>
						 <tr> 
							
							<td><select></select></td>
						  </tr>
						
						  <tr>
							<td><b>Fecha</b></td>
							
							</tr>
						 <tr>
							<td><input type="text" name="fecha_e"/></td>
						  </tr>
						
						  <tr>
							<td><b>Descripción</b></td>
							
							</tr>
						 <tr>
							<td><textarea rows="5" cols="40" name="descripcion_e"/></textarea></td>
						  </tr>
						  <tr>
					<td><button type="submit" name="" value="Entrar" class="css3button">Aceptar</button></td>
						  </tr>
						 </table> 
						</form> 
					</div>
					<div display="none">
						<form id="insertar_a" action="entrada.php" method="post" name="form_a">
						<table width="400" id="tabla_a">
							<tr>
								<td><h3 id="titulo_f"></h3></td>
							</tr>
						  <tr>				
							<td><b>Nombre del album</b></td> 
						 </tr>
						 <tr>
							<td><input type="text" name="nombre_a"/></td>
						
						  </tr>
						  <tr>
							<td><b>Nombre del grupo / DJ</b></td>
							</tr>
						 <tr> 
							
							<td><select></select></td>
						  </tr>
						
						  <tr>
							<td><b>Fecha</b></td>
							
							</tr>
						 <tr>
							<td><input type="text" name="fecha_a"/></td>
						  </tr>
						  <tr>
					<td><button type="submit" name="" value="Entrar" class="css3button">Aceptar</button></td>
						  </tr>
						</table>
						</form> 
					</div>
					<div display="none">
						<form id="modificar_a" action="entrada.php" method="post" name="form_a">
						<table width="400" id="tabla_a">
							<tr>
								<td><h3 id="titulo_f"></h3></td>
							</tr>
						  <tr>				
							<td><b>Nombre del album</b></td> 
						 </tr>
						 <tr>
							<td><input type="text" name="nombre_a"/></td>
						
						  </tr>
						  <tr>
							<td><b>Nombre del grupo / DJ</b></td>
							</tr>
						 <tr> 
							
							<td><select></select></td>
						  </tr>
						
						  <tr>
							<td><b>Fecha</b></td>
							
							</tr>
						 <tr>
							<td><input type="text" name="fecha_a"/></td>
						  </tr>
						  <tr>
					<td><button type="submit" name="" value="Entrar" class="css3button">Aceptar</button></td>
						  </tr>
						</table>
						</form> 
					</div>
					<div display="none">
						<form id="insertar_f" action="entrada.php" method="post" name="form_f">
						<table width="400" id="tabla_f">
							<tr>
								<td><h3 id="titulo_f"></h3></td>
							</tr>
						  <tr>				
							<td><b>Nombre de la foto</b></td> 
						 </tr>
						 <tr>
							<td><input type="text" name="nombre_a"/></td>
						
						  </tr>
						  <tr>
							<td><b>Nombre del grupo / DJ</b></td>
							</tr>
						 <tr> 
							
							<td><select></select></td>
						  </tr>
						
						  <tr>
							<td><b>Selecciona la foto</b></td>
							
							</tr>
						 <tr>
							<td><input type="file" name="fecha_a"/></td>
						  </tr>
						  <tr>
					<td><button type="submit" name="" value="Entrar" class="css3button">Subir</button></td>
						  </tr>
						</table>
						</form> 
					</div>
					<div display="none">
						<form id="modificar_f" action="entrada.php" method="post" name="form_f">
						<table width="400" id="tabla_f">
							<tr>
								<td><h3 id="titulo_f"></h3></td>
							</tr>
						  <tr>				
							<td><b>Nombre de la foto</b></td> 
						 </tr>
						 <tr>
							<td><input type="text" name="nombre_a"/></td>
						
						  </tr>
						  <tr>
							<td><b>Nombre del grupo / DJ</b></td>
							</tr>
						 <tr> 
							
							<td><select></select></td>
						  </tr>
						
						  <tr>
							<td><b>Selecciona la foto</b></td>
							
							</tr>
						 <tr>
							<td><input type="file" name="fecha_a"/></td>
						  </tr>
						  <tr>
					<td><button type="submit" name="" value="Entrar" class="css3button">Subir</button></td>
						  </tr>
						</table>
						</form> 
					</div>
					<div display="none">
						<form id="insertar_v" action="entrada.php" method="post" name="form_v">
						<table width="400" id="tabla_a">
							<tr>
								<td><h3 id="titulo_f"></h3></td>
							</tr>
						  <tr>				
							<td><b>Nombre del video</b></td> 
						 </tr>
						 <tr>
							<td><input type="text" name="nombre_v"/></td>
						
						  </tr>
						  <tr>
							<td><b>Nombre del grupo / DJ</b></td>
							</tr>
						 <tr> 
							
							<td><select></select></td>
						  </tr>
						
						  <tr>
							<td><b>Link de YouTube</b></td>
							
							</tr>
						 <tr>
							<td><input type="text" name="fecha_a"/></td>
						  </tr>
						  <tr>
					<td><button type="submit" name="" value="Entrar" class="css3button">Aceptar</button></td>
						  </tr>
						</table>
						</form> 
					</div>
					<div display="none">
						<form id="modificar_v" action="entrada.php" method="post" name="form_v">
						<table width="400" id="tabla_a">
							<tr>
								<td><h3 id="titulo_f"></h3></td>
							</tr>
						  <tr>				
							<td><b>Nombre del video</b></td> 
						 </tr>
						 <tr>
							<td><input type="text" name="nombre_v"/></td>
						
						  </tr>
						  <tr>
							<td><b>Nombre del grupo / DJ</b></td>
							</tr>
						 <tr> 
							
							<td><select></select></td>
						  </tr>
						
						  <tr>
							<td><b>Link de YouTube</b></td>
							
							</tr>
						 <tr>
							<td><input type="text" name="fecha_a"/></td>
						  </tr>
						  <tr>
					<td><button type="submit" name="" value="Entrar" class="css3button">Aceptar</button></td>
						  </tr>
						</table>
						</form> 
					</div>
					
		</body>
</html>