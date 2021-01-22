<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/AdminLTE.min.css">

	<title>ContBuscar</title>
</head>
<body>

<!--Inicio del codigo de busqueda-->

<br><!--cuadro de busqueda--> 
<div class="form-group">
    <div class="input-group">
	    <input type="text" class="form-control" name="searchText" id="caja_busqueda" placeholder="Buscar...">
        <span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>
<!--Resultados de la Busqueda-->
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive" id="datos"></div>
    </div>
</div>
<!--Librerias jquery necesarias para mostrar los resultados -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>

<!--Fin del codigo de busqueda-->

</body>

</html>