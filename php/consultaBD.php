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
        $cc = json_encode($celular);
				echo $cc;
	}
?>