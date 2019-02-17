<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--SLIDER-->
	<link href="css/sliding.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.js"></script>
    <script src="js/itemslide.js"></script>
    <script src="js/sliding.js"></script>
    <?php include 'php/consultaBD.php'; ?>
<meta charset="utf-8">
</head>
<body>    
	<div>
		<div class="row cuadrante">
			<div class="col-sm-6" style="background-color: blue;">
				cuadrante 1
			</div>
			<div class="col-sm-6" style="background-color: red;">
				cuadrante 2
			</div>
		</div>
		<div class="row cuadrante">
			<!--CUADRANTE 3-->
			<div class="col-sm-6" style="background-color:white;">
				<div class="row">
					<!--INFORMACIÓN CELULAR-->
					<div class="col-sm-6 seccion" style="background-color: white;">
						<div id="informacionC3">
                        <img src="img/cancel.png" id="cancel" alt="">
						    <h5>Opcion jajajaja</h5>
						    <p>Informacion de dispositivo:
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat et quisquam iusto molestiae impedit error, cumque, reiciendis. Error quo ad sequi, velit, commodi in, iste qui mollitia recusandae asperiores obcaecati?
						    </p>
						</div>
					</div>
					<!--COMPARATIVA-->
					<div class="col-sm-6 compar" style="background-image: url('Imagenes/arrastre.png'); background-size: cover;"  id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
						

					</div>				
				</div>
				<div class="row">
					<!--MENÚ CON ÍCONOS-->
					<div class="col-sm-6 seccion" style="background-color: white; ">
						<img src="imagenes/cel1.png" class="col-sm-6 cel1" style=" padding:2%; width:60px; height:75%; margin-top:13%;">
					</div>
					<!--SLIDER CELULALES-->
					<div class="col-sm-6" style="background-color: white;">
						<div id="scrolling" style="background-size: cover;">
							<ul>
                            <?php
                                    $Consulta = new  consultaBD;
                                    $usuarios = $Consulta->consultaCelulares();
                                    $N_U = count($usuarios,0);
                                 for ($i=0; $i<$N_U;$i++){
                                      $ruta=$usuarios[$i]->rutaImagen;
                                      $id=$usuarios[$i]->idCelular;
                                ?>
								 <li>
									<img id="<?php echo $id ;?>" class="slide-image" src="<?php echo 'BDCelulares/'.$ruta; ?>" height="95"  id="drag1" draggable="true" ondragstart="drag(event)"/>
								</li>
                                <?php }?>
							</ul>
						</div>
					</div>				
				</div>
			</div>
			<div class="col-sm-6" style="background-color: green;">
				cuadrante 4
			</div>
		</div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/funciones.js"></script>
<script type="text/javascript" src="js/DragandDrop.js"></script>
</body>
</html>

