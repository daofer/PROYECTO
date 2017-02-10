<?php 
	if (!isset($_SESSION['usuario'])){
		header("Location:../");
	}
?>
<aside class="main-sidebar">
    	<section class="sidebar">
	     	<div class="user-panel">
	        	<div class="pull-left image">
	          		<img src="../public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
	        	</div>
	        	<div class="pull-left info">
	          		<p><?php echo $_SESSION['usuario'];?></p>
	          		<a href="#"><i class="fa fa-circle text-success"></i> Programador web</a>
	        	</div>
	     	</div>

	     	<ul class="sidebar-menu">
	        	<li class="header">LISTA OPCIONES</li>
	        	<li class="treeview">
		          	<a href="#">
		            	<i class="fa fa-dashboard"></i> <span>PRINCIPAL</span>
		          	</a>
	        	</li>
	        	<li class="treeview ESTADIAS">
		          	<a href="#">
		            	<i class="fa fa-bed"></i> <span>ESTADIAS</span>
		            	<span class="pull-right-container">
		              		<i class="fa fa-angle-left pull-right"></i>
		            	</span>
		          	</a>
		          	<ul class="treeview-menu" id="ESTADIAS">
		            	<li><a href="../../index.html"><i class="fa fa-circle-o"></i> Entradas</a></li>
		            	<li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Reservas</a></li>
		            	<li><a href="huesped.php"><i class="fa fa-circle-o"></i> Huesped</a></li>
		            	<li><a href="cliente.php"><i class="fa fa-circle-o"></i> Cliente</a></li>
		          	</ul>
	        	</li>
	        	<li class="treeview HABITACION">
		          	<a href="#">
		            	<i class="fa fa-home"></i> <span>HABITACIONES</span>
		            	<span class="pull-right-container">
		              		<i class="fa fa-angle-left pull-right"></i>
		            	</span>
		          	</a>
		          	<ul class="treeview-menu" id="HABITACION">
		            	<li><a href="habitacion.php"><i class="fa fa-circle-o"></i> Habitacion</a></li>
		            	<li><a href="tipo_habitacion.php"><i class="fa fa-circle-o"></i> Tipo habitacion</a></li>
		          	</ul>
	        	 
	        	<li class="treeview MAESTRAS">
		          	<a href="#">
		            	<i class="fa fa-book"></i> <span>MAESTRAS</span>
		            	<span class="pull-right-container">
		              		<i class="fa fa-angle-left pull-right"></i>
		            	</span>
		          	</a>
		          	<ul class="treeview-menu" id="MAESTRAS">
		            	<li><a href="tipo_cliente.php"><i class="fa fa-circle-o"></i> Tipo cliente</a></li>
		            	<li><a href="tipo_documento.php"><i class="fa fa-circle-o"></i> Tipo documento</a></li>
		            	<li><a href="ciudad.php"><i class="fa fa-circle-o"></i> Ciudad</a></li>
		            	<li><a href="pais.php"><i class="fa fa-circle-o"></i> Pais</a></li>
		            	<li><a href="tipo_servicio.php"><i class="fa fa-circle-o"></i> Tipo servicio</a></li>
		            	<li><a href="tipo_empleado.php"><i class="fa fa-circle-o"></i> Tipo empleado</a></li>
		          	</ul>
	        	</li>
	        	<li class="header">OTRAS OPCIONES</li>
	        	<li><a href="../index.php"><i class="fa fa-circle-o text-red"></i> 
	        		<span>CERRAR SESION</span></a>
	        	</li>
	     	</ul>
    	</section>
</aside>