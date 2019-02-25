<html>
	<head>	
		<title>Inicio - Az-tec</title>	
		<script src="jquery.js"></script>
		<script src="scrip.js"></script>
		<script>
			$(document).ready(function(){
				$("#ini").addClass("activo");
				$("#gar_true").hide();
				$("#cortina").hide();
				$("#ini").click(function(){
					$("#ini").removeClass("desactivado");
					$("#ini").addClass("activo");
					$("#gar").removeClass("activo");
					$("#gar").addClass("desactivado");
					$("#pro").removeClass("activo");
					$("#pro").addClass("desactivado")
					window.location="#io";
				});
				$("#gar").click(function(){
					$("#ini").removeClass("activo");
					$("#ini").addClass("desactivado");
					$("#gar").removeClass("desactivado");
					$("#gar").addClass("activo");
					$("#pro").removeClass("activo");
					$("#pro").addClass("desactivado");
					$("#gar_true").show();
					$("#gar_true").animate({left:'25%'},"slow");
					$("#gar_cuerp").slideDown("slow");
					$("#cortina").show();
				});
				$("#pro").click(function(){
					$("#ini").removeClass("activo");
					$("#ini").addClass("desactivado");
					$("#gar").removeClass("activo");
					$("#gar").addClass("desactivado");
					$("#pro").removeClass("desactivado");
					$("#pro").addClass("activo");
					window.location="#producto";
				});
				$("#cortina").click(function(){
					$("#cortina").hide();
					$("#gar_true").css({"left":"0%"});
					$("#gar_cuerp").slideUp("slow");
					$("#gar_true").hide();
					$("#gar").removeClass('activo');
					$("#fr_bs").remove();
				});
				var a = 0;
				function pasa(){
				if(a==0){
					$("#imagen").html("<img src='img/bonito.jpg'><div>Somos una empresa comprometida con la naturaleza por ello d&iacute;a a d&iacute;a buscamos la manera de crear lavariable que permita mejorar el ahorro de agua, con sencillos circuitos que en conjunto sean capaces de hacer algo complejo para el mejoramiento de nuestro planeta, y para crecer juntos como sociedad conciente de su medio ambiente.</div>");
					a += 1;
				}else if(a==1){
					$("#imagen").html("<img src='img/futuro.jpg'><div><big>AZ - TEC</big><br><br><I>Creando hoy el futuro del ma&ntilde;ana</I></div>");
					a = 0;
				}
			}
			setInterval(pasa,5000);
			});
		</script>
		<script>
		</script>
		<link rel="stylesheet" type="text/css" href="principal.css">
		<link rel="stylesheet" type="text/css" href="links.css">
		<style type="text/css">
			
		</style>
	</head>
	<body>
	<!-- Formulario -->
		<div id="cortina"></div>
		<div id="gar_true">
			<div id="tit_gar"><div>Garantia</div></div>
			<div id="gar_cuerp">
			<img src="sub_barra_gar.png" id="sub_bar_gar" width="49px" height="100%">
				<form action="">
				<div style="text-align:center; padding:3px; margin:1px;">N&deg; de serie de la garantia</div>
						<center><input type="text" name="ser_1" maxlength="4" id="serie_txt" /><label id="sep">-</label><input type="text" name="ser_2" maxlength="10" id="serie_txt1" /><label id="sep">-</label><input type="text" name="ser_3" maxlength="4" id="serie_txt" /><label id="veri"></label></center>
				<HR>
				<div style="text-align:center; padding:3px; margin:1px;">Datos personales</div>
				<DIV id="form"><label id="lab">Nombre(s):</label><input id="txt_form" type="text" name="nom"></DIV>
				<div id="form"><label id="lab">Apellidos:</label><input id="txt_form" type="text" name="ape"></div>
				<div id="form"><label id="lab">Estado:</label><select id="txt_form" name="est" >
				<option selected="">Selecciona el estado</option>
				<option value="0">Aguascalientes</option>
				<option value="1">Baja California</option>
				<option value="2">Baja California Sur</option>
				<option value="3">Campeche</option>
				<option value="4">Coahuila</option>
				<option value="5">Colima</option>
				<option value="6">Chiapas</option>
				<option value="7">Chihuahua</option>
				<option value="8">Distrito Federal</option>
				<option value="9">Durango</option>
				<option value="10">Guanajuato</option>
				<option value="11">Guerrero</option>
				<option value="12">Hidalgo</option>
				<option value="13">Jalisco</option>
				<option value="14">Estado de M&eacute;xico</option>
				<option value="15">Michoac&aacute;n</option>
				<option value="16">Morelos</option>
				<option value="17">Nayarit</option>
				<option value="18">Nuevo Le&oacute;n</option>
				<option value="19">Oaxaca</option>
				<option value="20">Puebla</option>
				<option value="21">Quer&eacute;taro</option>
				<option value="22">Quintana Roo</option>
				<option value="23">San Luis Potos&iacute;</option>
				<option value="24">Sinaloa</option>
				<option value="25">Sonora</option>
				<option value="26">Tabasco</option>
				<option value="27">Tamaulipas</option>
				<option value="28">Tlaxcala</option>
				<option value="29">Veracruz</option>
				<option value="30">Yucat&aacute;n</option>
				<option value="31">Zacatecas</option>
				</select></div>
				<div id="form"><label id="lab">Ciudad:</label><input id="txt_form" type="text" name="Cid" /></div>
				<div id="form"><label id="lab">Domicilio:</label><input id="txt_form" type="text" name="dom" /></div>
				<div id="form"><label id="lab">Id de producto</label><input id="txt_form" type="text" name="IdP" /></div><br><br>
				<hr>
					<center><input type="submit" value="Enviar">||<input type="button" value="Borrar"></center>
				</form>
			</div>
		</div>
	<!-- Fin de formulario -->
	<div id="barra"><img src="iconos/simbolo.png" width="25px" height="25px" id="icon"><span id="nom">AZ-TEC</span><SPAN id="sub">Creando software de calidad</SPAN><span id="social"><span id="red">Redes sociales</span><a href="https://www.facebook.com/aztecmxcenter" target="_bank" id="face">F</a></span></div>

	<a name="io"></a>
	<div id="cuerpo">
	<div id="imagen">
		<img src='img/bonito.jpg'><div>Somos una empresa comprometida con la naturaleza por ello d&iacute;a a d&iacute;a buscamos la manera de crear lavariable que permita mejorar el ahorro de agua, con sencillos circuitos que en conjunto sean capaces de hacer algo complejo para el mejoramiento de nuestro planeta, y para crecer juntos como sociedad conciente de su medio ambiente.</div>
	</div>
		<ul id="sub_bar">
			<li id="ini"><div>Contacto</div></li>
			<li id="pro"><div>Promociones</div></li>
			<li id="gar"><div>Garantias</div></li>
		</ul>
		<a name="producto"></a>
		<div id="contac"><span id="tel">Contacto: (044)5529680598</span><span id="mail"><input type="button" class="btn_mail" value="Enviar Correo"></span></div>
		<br>
		<br>
		<br>
		<br>
			<center><table id="porque">
				<tr width="100%" id="titulos">
					<td width="25%">Nosotros</td>
					<td width="25%">Porque elegirnos</td>
					<td width="25%">Promociones</td>
					<td width="25%">&iquest;Qu&eacute; desarrollamos?</td>
				</tr>
				<tr id="cuer">
					<td>
						Somos una empresa comprometida con M&eacute;xico y con el mundo para desarrollar tecnolog&iacute;a de calidad para las areas de entretenimiento, salud y desarrollo social.  
					</td>
					<td>
						Somos una empresa que esta encargada de entregar trabajos de calidad adem&aacute;s de dar la mejor atencion a nuestros clientes.
					</td>
					<td>
						Actualmente tenemos promociones para escuelas y peque&ntilde;as escuelas.
						<ul style="list-style:none;">
							<li><a href="#p_escuela" id="p_lnk">Promoci&oacute;n para escuelas.</a></li>
							<li><a href="#p_empresa" id="p_lnk">Promoci&oacute;n para empresas.</a></li>
						</ul>
					</td>
					<td>
					Actualmente nos enfocamos mas al dise&ntilde;o WEB y de dise&ntilde;o de Software.
						<ul>
							<li>Desarrollo de p&aacute;ginas web.</li>
							<li>Software administrativos, personalizados segun la necesidad de nuestro cliente.</li>
						</ul>
					</td>
				</tr>
			</table></center>
			<br>
			<br>
			<br>


			<center><table id="promociones">
				<tr><td id="t_prom"><a name="p_escuela">Promoci&oacute;n para esculas.</a></td></tr>
				<tr><td> 
					<span id="promo">Promoci&oacute;n <b>&iexcl;Mi primer sitio web!</b></span><br>
					<span id="promo">La <b>promoci&oacute;n &iexcl;Mi primer sitio web!</b> es la promoci&oacute;n ideal si estas buscando tener un sitio para tu estancia escolar que no afecte a tu econom&iacute;a y adem&aacute;s sea un sitio de calidad.
					<br>
					Es por eso que esta promoci&oacute;n es ideal para ti, esta promoci&oacute;n te proporciona un sitio web de calidad y sencilles, esta promoci&oacute;n contiene lo siguiente para ti.
					</span>
						<ul id="promo_list_esc">
							<li>P&aacute;gina de inicio.</li>
							<li>P&aacute;gina donde los maestros puedan subir tareas o trabajos a entregar.</li>
							<li>P&aacute;gina de anuncios (Donde se muestran eventos o cursos que se vallan a impartir en el plantel) .</li>
							<li>P&aacute;gina de Inscripci&oacute; o Reinscripci&oacute;n.</li>
							<li>P&aacute;gina de contacto.</li>
						</ul>
					<span id="promo">
					Ll&eacute;vate esta gran promoci&oacute;n por tan solo <s>$1900<sup>/a&ntilde;o</sup></s> <big><b>$1100<sup>/a&ntilde;o</sup></b></big>. 
					<br>
						Esta es la promoci&oacute;n ideal si vas incurcionando apenas en la web y quieres dar a conocer tu centro educativo.
					</span>
					<br>
					<br>

					<a href="ejemplos/maspormenos.html" id="promo_escuela_eje">Ver ejemplo &raquo;</a>
					<hr class="hr">
					<center><small id="impor_promo">*El precio puede variar con aviso previo en esta misma p&aacute;gina</small></center>
				</td></tr>
				<tr><td id="t_prom"><a name="p_empresa">Promoci&oacute;n para empresas.</a></td></tr>
				<tr><td> 

				</td></tr>
			</table></center>
			<br>
			<br>
			<br>

			<TABLE id="fin">
			<TR>
				<TD id="area1">
					<span id="titulo_fin">Programas Gratuitos</span>
					<ol>
						<li><a href="" id="lnK_free_p">Seguridad de USB,CD,DVD</a></li>
						<li><a href="" id="lnk_free_p">Jalea 3D</a></li>
					</ol>
				</TD>

				<td id="area2">
					<span id="titulo_fin">Comunidad</span>
					<ul>
						<li><a href="" id="cm_lnk">Recursos para estudiantes</a></li>
						<li><a href="foro/" id="cm_lnk">Foro</a></li>
					</ul>
				</td>
				<td id="area3">
					<span id="titulo_fin">Proyectos</span>
					<ul>
						<li><a href="" id="cm_lnk">Proyectos en desarrollo</a></li>
						<li><a href="" id="cm_lnk">Proyectos de investigaci&oacute;n</a></li>
					</ul>
				</td>
				</TR>
			</TABLE>
	</div>
	</body>
</html>