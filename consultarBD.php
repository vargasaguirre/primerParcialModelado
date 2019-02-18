<?php
	header("Content-Type: text/plain"); 

	$nombre = $_POST['idCelular'];
//$nombre= "albert";
if (!empty($nombre))
	{
		$link = new mysqli("localhost", "root", "", "mesainteractiva");	

		/* comprobar la conexión */
		
		/* Crear una tabla que no devuelve un conjunto de resultados */
       // $nombre= "albert";
		if ( $result2 = $link->query("SELECT * FROM celular WHERE idCelular = '$nombre'") ) 
		{
			//echo "Se accedió con éxtio la tabla datos_clientes <br/>");
			$row = $result2->fetch_array(MYSQLI_ASSOC);
            if( isset($row) )
			{
				$data = array();

				foreach ( $row as $key => $value ) {
					$data[$key] = utf8_encode($value);
				}
$cc = json_encode($data);
				echo $cc;
                /*
                $fichero = 'gente.txt';
// Abre el fichero para obtener el contenido existente
$actual = file_get_contents($fichero);
// Añade una nueva persona al fichero
$actual .= $cc;
// Escribe el contenido al fichero
file_put_contents($fichero, $actual);
*/
                
			}else
			{
				$data = array(
					'Id_cliente' => 'no se encontraron datos',
					'nombre' => 'no se encontraron datos',
					'apellidos' => 'no se encontraron datos',
					'direccion' => 'no se encontraron datos',
					'ciudad' => 'no se encontraron datos',
					'codigo_postal' => 'no se encontraron datos');

				echo json_encode($data);
			}

			$result2->free();
		}
		else
		{
			$data = array(
				'Id_cliente' => 'error en la consulta',
				'nombre' => 'error en la consulta',
				'apellidos' => 'error en la consulta',
				'direccion' => 'error en la consulta',
				'ciudad' => 'error en la consulta',
				'codigo_postal' => 'error en la consulta');

			echo json_encode($data);
		}

		$link->close();
	}else
	{
		$data = array(
			'Id_cliente' => 'no se encontraron datos',
			'nombre' => 'no se encontraron datos',
			'apellidos' => 'no se encontraron datos',
			'direccion' => 'no se encontraron datos',
			'ciudad' => 'no se encontraron datos',
			'codigo_postal' => 'no se encontraron datos');

		echo json_encode($data);
	}
?>	