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
		
    }
    $Consulta = new  consultaBD;
	var_dump($Consulta->consultaCelular(1));
 
?>