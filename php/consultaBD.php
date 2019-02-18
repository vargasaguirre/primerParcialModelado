<?php

	class consultaBD
	{
		private $ObjetBD ;
    	
		public function __construct()
		{
			$this->ObjetBD = new PDO('mysql:host=localhost;dbname=mesainteractiva','root','');
		}
		public function consultaCelular($idCelular)
		{
			$respuesta = array();
			$query="SELECT * FROM celular WHERE idCelular='$idCelular'";
			$usuario= $this->ObjetBD->prepare($query);
			$usuario->execute();
			if ($consulta=$usuario->fetch(PDO::FETCH_OBJ)){
				return $consulta;
			}
			else
			{
				return $consulta=null;
			}
		}
        public function consultaCelulares(){
            
			$query="SELECT * FROM celular";
			$usuario= $this->ObjetBD->prepare($query);
			 $usuario->execute();
             $users=$usuario->fetchAll(PDO::FETCH_OBJ);
            return $users;
        }
		
    } 

    if(isset($_POST['clave'])){
    	$Consulta = new  consultaBD;
        $celular = $Consulta->consultaCelular($_POST['clave']);
        echo "Marca: ".$celular->Marca."<br>";
        echo "Modelo: ".$celular->Modelo."<br>";
        echo "Precio: ".$celular->Precio."<br>";
        echo "Cámara: ".$celular->Camara."<br>";
        echo "Memoria Ram: ".$celular->Memoria_Ram."<br>";
        echo "Descripción: ".$celular->Descripcion."<br>";
        echo "Almacenamiento: ".$celular->Almacenamiento."<br>";
        echo "Sistema Operativo: ".$celular->SistemaOperativo."<br>";
        echo "Extras: ".$celular->Extras."<br>";
	}
?>