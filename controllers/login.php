<?php
	require_once ('../models/login.php');
	$var = Login::Conectandome();
 	
	if(isset($_POST['usuario'])){
		$usuario= $_POST['usuario'];
		$password = $_POST['clave'];

		//$usuario = $var->Login_usuario($usuario,$password);
		if ($usuario=='daniel' && $password=='123') {
			$_SESSION['idusuario'] = '1';
			$_SESSION['usuario'] = 'DANIEL OBLITAS';	
			$_SESSION['perfil'] = '1';
			header("Location:../controllers/principal.php");
		}else{
			header("Location:../");
		}
	}else{
		require_once("../views/login.php");
	}
?>