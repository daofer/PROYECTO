<!DOCTYPE html>
<html>
	<?php include("layout/css.php"); ?>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
		  	<?php include("layout/cabecera.php"); ?>
		 	<?php include("layout/menu.php"); ?>
		  
		  	<div class="content-wrapper">
			    	<section class="content">
			      	<div class="row">
			        		<div class="col-xs-12"> <br><br><br><br>
			          			
			        		</div>
			      	</div>
			    	</section>
			</div>

		  	<footer class="main-footer">
			    	<div class="pull-right hidden-xs">
			      	<b>CURSO: </b> LP4 - FISI - UNSM
			    	</div>
		    		<strong>Copyright &copy; Verano 2017</strong>
		  	</footer>
		</div>

		<?php include("layout/js.php"); ?>

		<script>
		  	$(function () {
		    		$("#example1").DataTable();
		  	});
		</script>
	</body>
</html>
