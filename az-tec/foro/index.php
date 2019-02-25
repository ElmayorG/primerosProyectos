<?php
	$_COOKIE['log'] = 'no';
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Foro az-tec</title>
		
		<link rel="stylesheet" type="text/css" href="foro.css">
		<script src="foro.js"></script>
		<script src="jquery.js"></script>
		<script>
		$(document).ready(function(){
			$(".ent").click(function(){
				$("#cortina").removeClass("off");
				$("#log_foro").removeClass("off");
				$("#log_foro").addClass("on");
				$("#cortina").addClass("on");
				return false;
			});
			$("#cierre").click(function(){
				$("#cortina").removeClass("on");
				$("#cortina").addClass("off");
				$("#log_foro").removeClass("on");
				$("#log_foro").addClass("off");
			});
			$(".reg").click(function(){
				$("#cortina").removeClass("off");
				$("#cortina").addClass("on");
				$("#reg_foro").removeClass("off");
				$("#reg_foro").addClass("on");
				return false;
			});	
			$("#cierra").click(function(){
				$("#cortina").removeClass("on");
				$("#cortina").addClass("off");
				$("#reg_foro").removeClass("on");
				$("#reg_foro").addClass("off");
			})		
		});
		</script>
	</head>
	<body>
		<div id="foro_bar">
			<div id="lar_bar">Foro Az-tec</div>
			<div id="sm_bar"><?php 
				if($_COOKIE['log']=='log'){
			?>
			<a href="" id="lnk_sm">Perfil</a>
			<?php 
				}else{
			?>
			<a href="" id="lnk_sm" class="ent">Entrar</a>&#32;&#32;<a href="" id="lnk_sm" class="reg">Registrar</a>
			<?php
				}
			?></div>
		</div>
		<center><table id="foro">
			<tr>
				<td colspan="3">
					<div id="tit_sup_foro">Avisos importantes del foro</div>
				</td>
			</tr>
			<tr>
				<td width="70%">
					<div id="sub_tit_foro"><a href="" class="sub_lnk">REGLAMENTO DEL FORO</a></div>
				</td>
				<td width="15%">
					<div id="resp_user">Tecnico</div>
				</td>
				<td width="15%">
					<div id="visit_foro">100</div>
				</td>
			</tr>
			<tr>
				<td width="70%">
					<div id="sub_tit_foro"><a href="" class="sub_lnk">USO DEL FORO</a></div>
				</td>
				<td width="15%">
					
				</td>
				<td width="15%">
					
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<div id="tit_sup_foro_a"> Temas m&aacute;s recientes del foro</div>
				</td>
			</tr>
		</table></center>
		<div id="cortina" class="off"></div>
		
		<form id="log_foro" class="off" onsubmit="loguear(); return false;">
			<div id="cierre">X</div>
			<hr>
			<center id="tit_log"><b>Entrar</b></center><br><br>
			<div id="a"><div id="label">Correo:</div><input placeholder="Correo" name="correo" type="text" id="log_input" class="cor_log"></div><br><br>
			<div id="a"><div id="label">Contrase&ntilde;a:</div><input placeholder="Contrase&ntilde;a" name="contra" class="contr_log" type="password" id="log_input"> </div><br>
			<span id="resp_log"></span>
			<br><br>
			<center><a href="" id="olv_log">&iquest;Olvido su contrase&ntilde;a?</a></center>
			<br><br>
			<div id="botns"><div id="btn_reg"><input type="button" value="&iexcl;Registrame!" id="reg_btn"></div><div id="btn_ent"><input type="submit" value="Entrar" id="ent_btn"></div></div>
		</form>

		<form id="reg_foro" class="off" onsubmit="registrar(); return false;">
		<div id="cierra">X</div>
		<center id="tit_reg">Registrarme</center>
		<hr>
			<div id="a_reg"><label>Usuario</label><input type="text" name="user" id="txt_reg" class="user" autocomplete></div>
			<div id="a_reg"><label>Correo:</label><input id="txt_reg" name="mail" type="email" class="email" autocomplete></div>	
			<div id="a_reg"><label>Confirmar Correo:</label><input id="txt_reg" name="con_cor" class="con_cor" type="text" autocomplete></div>
			<div id="a_reg"><label>Contrase&ntilde;a:</label><input id="txt_reg" name="contra" class="contra" type="password"></div>
			<div id="a_reg"><label>Confirmar contrase&ntilde;a:</label><input id="txt_reg" name="con_con" class="con_con" type="password"></div>
		
			<div id="b_reg"><input type="checkbox" name="acepta"><label>Acepto los T&eacute;rminos y Condiciones</label></div>
			<div id="b_reg"><input type="checkbox" name="si_cor"><label>Deseo recibir correos de actualizaciones o eventos</label></div>

			<br>
			<center><input type="submit" value="&iexcl;Registrarme!" id="reg_acp"></center>

		</form>
	</body>
	</html>