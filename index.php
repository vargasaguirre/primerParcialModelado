<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--SLIDER-->
	<link href="css/sliding.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.js"></script>
    <script src="js/itemslide.js"></script>
    <script src="js/sliding.js"></script>
    <!--ÍCONOS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <?php include 'php/consultaBD.php'; ?>
<meta charset="utf-8">
</head>
<body>    
	<div>
		<div class="row cuadrante">
		<!--cyadrante 1---->
			<div class="col-sm-6" id="cuadrante1">
				 <div class="row">
					<!--INFORMACIÓN CELULAR-->
					<div class="col-sm-6 seccion">
						<div class="informacionC3">
						    <h5>Informacion del dispositivo</h5>
						    <p id="InfoCelc1">
						    </p>
						</div>
					</div>
					<!--COMPARATIVA-->
					<div class="col-sm-6 compar"  id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div class="informacionC3">
						    <h5>Informacion del dispositivo</h5>
						    <p id="InfoCelComparc1">
						    </p>
						</div>
					</div>				
				</div>
				<div class="row">
					<!--MENÚ CON ÍCONOS-->
					<div class="col-sm-6 seccion" >
                        <?php 
                            $Consulta = new  consultaBD;
                            $celular = $Consulta->consultaCelular(8);
                            $rutaexibido= $celular->rutaImagen;
                        ?>
                        <div  class="col-sm-6 seccion">
                            <img src="<?php echo 'BDCelulares/'.$rutaexibido; ?>"  class="celularExibicion CelEx1">
                        </div>
						<button type="button" class="btn btn-primary btnIconos" onclick="getInfo('<?php echo $celular->Camara; ?>',1);"><i class="fa fa-camera"></i></button>
						<button type="button" class="btn btn-success btnIconos" onclick="getInfo('<?php echo $celular->Memoria_Ram; ?>',2);" style="font-size: 25px;"><i class="material-icons">memory</i></button>
						<button type="button" class="btn btn-warning btnIconos" onclick="getInfo('<?php echo $celular->Descripcion; ?>',3);"><i class='fas fa-mobile-alt'></i></button>
						<button type="button" class="btn btn-danger btnIconos" onclick="getInfo('<?php echo $celular->SistemaOperativo; ?>',4);" style="font-size: 15px;"><i class="fa fa-android"></i>/<i class="fa fa-apple"></i></button>
						<button type="button" class="btn btn-dark btnIconos" onclick="getInfo('<?php echo $celular->Extras; ?>',5);"><i class="fa fa-plus"></i></button>

					</div>
					<!--SLIDER CELULALES-->
					<div class="col-sm-6" >
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
			<!--cyadrante 2---->
			<div class="col-sm-6" id="cuadrante2">
				<div class="row">
					<!--INFORMACIÓN CELULAR-->
					<div class="col-sm-6 seccion"  >
						<div class="informacionC3">
						    <h5>Informacion del dispositivo</h5>
						    <p id="InfoCelc2">
						    </p>
						</div>
					</div>
					<!--COMPARATIVA-->
					<div class="col-sm-6 compar"  id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div class="informacionC3">
						    <h5>Informacion del dispositivo</h5>
						    <p id="InfoCelComparc2">
						    </p>
						</div>
					</div>				
				</div>
				<div class="row">
					<!--MENÚ CON ÍCONOS-->
					<div class="col-sm-6 seccion" >
                        <?php 
                            $Consulta = new  consultaBD;
                            $celular = $Consulta->consultaCelular(8);
                            $rutaexibido= $celular->rutaImagen;
                        ?>
                        <div id="imagencelular3" class="col-sm-6 seccion">
                            <img src="<?php echo 'BDCelulares/'.$rutaexibido; ?>"  class="celularExibicion CelEx2">
                        </div>	
                       <button type="button" class="btn btn-primary btnIconos" onclick="getInfo('<?php echo $celular->Camara; ?>',1);"><i class="fa fa-camera"></i></button>
						<button type="button" class="btn btn-success btnIconos" onclick="getInfo('<?php echo $celular->Memoria_Ram; ?>',2);" style="font-size: 25px;"><i class="material-icons">memory</i></button>
						<button type="button" class="btn btn-warning btnIconos" onclick="getInfo('<?php echo $celular->Descripcion; ?>',3);"><i class='fas fa-mobile-alt'></i></button>
						<button type="button" class="btn btn-danger btnIconos" onclick="getInfo('<?php echo $celular->SistemaOperativo; ?>',4);" style="font-size: 15px;"><i class="fa fa-android"></i>/<i class="fa fa-apple"></i></button>
						<button type="button" class="btn btn-dark btnIconos" onclick="getInfo('<?php echo $celular->Extras; ?>',5);"><i class="fa fa-plus"></i></button>

					</div>
					<!--SLIDER CELULALES-->
					<div class="col-sm-6"  >
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
		</div>
		<div class="row cuadrante">
			<!--CUADRANTE 3-->
			<div class="col-sm-6" id="cuadrante3">
				<div class="row">
					<!--INFORMACIÓN CELULAR-->
					<div class="col-sm-6 seccion"  >
						<div class="informacionC3">
						    <h5>Informacion del dispositivo</h5>
						    <p id="InfoCel">
						    </p>
						</div>
					</div>
					<!--COMPARATIVA-->
					<div class="col-sm-6 compar"  id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div class="informacionC3">
						    <h5>Informacion del dispositivo</h5>
						    <p id="InfoCelCompar">
						    </p>
						</div>
					</div>				
				</div>
				<div class="row">
					<!--MENÚ CON ÍCONOS-->
					<div class="col-sm-6 seccion">
                        <?php 
                            $Consulta = new  consultaBD;
                            $celular = $Consulta->consultaCelular(1);
                            if(isset($celular->rutaImagen)){
                            	$rutaexibido= $celular->rutaImagen;
                            }
                            else {
                            	$rutaexibido = "";
                            }
                        ?>
                        <div id="imagencelular3" class="col-sm-6 seccion">
                            <img src="<?php echo 'BDCelulares/'.$rutaexibido; ?>"  class="celularExibicion CelEx3">
                        </div>
                        <div id="contenedorBotones" class="col-sm-6 seccion">
                            
						<button type="button" class="btn btn-primary btnIconos" onclick="getInfo('<?php echo $celular->Camara; ?>',1);"><i class="fa fa-camera"></i></button>
						<button type="button" class="btn btn-success btnIconos" onclick="getInfo('<?php echo $celular->Memoria_Ram; ?>',2);" style="font-size: 25px;"><i class="material-icons">memory</i></button>
						<button type="button" class="btn btn-warning btnIconos" onclick="getInfo('<?php echo $celular->Descripcion; ?>',3);"><i class='fas fa-mobile-alt'></i></button>
						<button type="button" class="btn btn-danger btnIconos" onclick="getInfo('<?php echo $celular->SistemaOperativo; ?>',4);" style="font-size: 15px;"><i class="fa fa-android"></i>/<i class="fa fa-apple"></i></button>
						<button type="button" class="btn btn-dark btnIconos" onclick="getInfo('<?php echo $celular->Extras; ?>',5);"><i class="fa fa-plus"></i></button>
                        </div>
						

					</div>
					<!--SLIDER CELULALES-->
					<div class="col-sm-6"  >
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
			<!-- cuadrante 4-->
			<div class="col-sm-6" id="cuadrante4">
				<div class="row">
					<!--INFORMACIÓN CELULAR-->
					<div class="col-sm-6 seccion"  >
						<div class="informacionC3">
						    <h5>Informacion del dispositivo</h5>
						    <p id="InfoCelc4">
						    </p>
						</div>
					</div>
					<!--COMPARATIVA-->
					<div class="col-sm-6 compar"  id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div class="informacionC3">
						    <h5>Informacion del dispositivo</h5>
						    <p id="InfoCelCompar">
						    </p>
						</div>
					</div>				
				</div>
				<div class="row">
					<!--MENÚ CON ÍCONOS-->
					<div class="col-sm-6 seccion">
                        <?php 
                            $Consulta = new  consultaBD;
                            $celular = $Consulta->consultaCelular(8);
                            $rutaexibido= $celular->rutaImagen;
                        ?>
                        <div id="" class="col-sm-6 seccion">
                            <img src="<?php echo 'BDCelulares/'.$rutaexibido; ?>"  class="celularExibicion CelEx1">
                        </div>
						<button type="button" class="btn btn-primary btnIconos" onclick="getInfo('<?php echo $celular->Camara; ?>',1);"><i class="fa fa-camera"></i></button>
						<button type="button" class="btn btn-success btnIconos" onclick="getInfo('<?php echo $celular->Memoria_Ram; ?>',2);" style="font-size: 25px;"><i class="material-icons">memory</i></button>
						<button type="button" class="btn btn-warning btnIconos" onclick="getInfo('<?php echo $celular->Descripcion; ?>',3);"><i class='fas fa-mobile-alt'></i></button>
						<button type="button" class="btn btn-danger btnIconos" onclick="getInfo('<?php echo $celular->SistemaOperativo; ?>',4);" style="font-size: 15px;"><i class="fa fa-android"></i>/<i class="fa fa-apple"></i></button>
						<button type="button" class="btn btn-dark btnIconos" onclick="getInfo('<?php echo $celular->Extras; ?>',5);"><i class="fa fa-plus"></i></button>

					</div>
					<!--SLIDER CELULALES-->
					<div class="col-sm-6"  >
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
		</div>
	</div>
	
	<div id="salvapantallas">
        <p class="textoes uno">Desliza la pantalla</p>
	    <p class="textoes dos">Desliza la pantalla</p>
	    <div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/ix.jpg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/weex2.png"  />
		</div>
		<div class="slide">
			<img class="imagenes"  class="imagenes"  src="img/spantalla/p20.jpg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/virgin.jpg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/xi2.jpeg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/Pok%C3%A9mon-GO-10-09-15-000.jpg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/motog7.png" alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/ix.jpg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/weex2.png"  />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/p20.jpg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/virgin.jpg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/xi2.jpeg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/Pok%C3%A9mon-GO-10-09-15-000.jpg"  alt="" />
		</div>
		<div class="slide">
			<img class="imagenes"  src="img/spantalla/motog7.png"  alt="" />
		</div>
	</div>
</div>
    </div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/funciones.js"></script>
<script type="text/javascript" src="js/DragandDrop.js"></script>
</body>
</html>

