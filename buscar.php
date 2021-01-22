<?php
    include("../Modelo/db.php");

      if($conexion->connect_error){
        die("Conexión fallida: ".$conexion->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM categoria WHERE nombre NOT LIKE '' ORDER By idcategoria LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conexion->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM categoria WHERE idcategoria LIKE '%$q%' OR nombre LIKE '%$q%' OR descripcion LIKE '%$q%' ";
    }

    $resultado = $conexion->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='table table-striped table-bordered table-condensed table-hover'>
    			<thead>
    				<tr id='titulo'>
    					<th>ID</th>
    					<th>Nombre</th>
                        <th>Descripción</th>
                        <th>Opciones</th>  
                        
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['idcategoria']."</td>
    					<td>".$fila['nombre']."</td>
                        <td>".$fila['descripcion']."</td>
                        <td>
                            <button class='btn btn-info'>Editar</button>
                            <button class=' btn btn-danger'>Eliminar</button>
                        </td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="No hay datos que mostrar :(";
    }


    echo $salida;

    $conexion->close();



?>