<?php
include('../../controllers/db.php');
if(isset($_POST['clave'])){
    $foo = Database::connect();

    $query = $foo->prepare("SELECT * ,
                          (SELECT Detalle FROM cat_tipoingrediente C Where I.CveTipoIngrediente = C.Clave)Tipo
                          FROM ingrediente I
                          WHERE I.Clave = ?");
    $query-> execute( array( $_POST['clave'] ) );
    $Ingrediente = $query->fetchAll();

    $sql = $foo->prepare("SELECT Clave,Detalle FROM cat_tipoingrediente ORDER BY Detalle");
    $sql-> execute( );
    $Tipos = $sql->fetchAll();
?>
<script src="assets/js/custom-file-input.js"></script>
<div class="modal-header card-header-danger">
  <h4 class="modal-title">Detalle del ingrediente</h4>
  <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body" >
  <form method="post" enctype="multipart/form-data" id="formularioEditarIngredientes">
  <div class="row align-items-center">
    <input type="hidden" class="form-control" name="claveEditar" id="txtEditIdIng" value="<?= $Ingrediente[0]['Clave'] ?>">
    <div class="col-md-5 text-right">
      Ingrediente
    </div>
    <div class="col-md-6 text-left">
      <input type="text" class="form-control" name="detalleEditar" id="txtEditDetalleIng" value="<?= $Ingrediente[0]['Detalle'] ?>" >
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-md-5 text-right">
      Estatus
    </div>
    <div class="col-md-6 text-left">
      <select class="form-control custom-select" name="estatusEditar" id="cmbEditEstatusIng">
        <?php
          if ($Ingrediente[0]['Estatus']==1) {
            echo "<option selected value='1'>Activado</option>";
            echo "<option value='2'>Desactivado</option>";
          }
          else{
            echo "<option value='1'>Activado</option>";
            echo "<option selected value='2'>Desactivado</option>";
          }
        ?>
  		</select>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-md-5 text-right">
      Tipo ingrediente
    </div>
    <div class="col-md-6 text-left ">
      <select class="form-control " name="tipoEditar" id="cmbEditTipoIng">
        <?php foreach ($Tipos as $key) {
          if ($key['Clave'] == $Ingrediente[0]['CveTipoIngrediente']) {
            echo "<option selected value='".$key['Clave']."'>".$key['Detalle']."</option>";
          }
          else{
          echo "<option value='".$key['Clave']."'>".$key['Detalle']."</option>"; }
        } ?>
      </select>
    </div>
  </div>
  <div class="col-md-12 ml-2 mt-5">
    <div class="form-group">
      <input type="file" class="inputfile inputfile-2" id="imgEditJpgIng" name="imgEditJpgIng" accept=".jpeg,.jpg">
      <label for="imgEditJpgIng"><span>Cambia la imagen</span></label>
    </div>
  </div>
  <div class="col-md-12 ml-2  mt-4">
    <div class="form-group">
      <input type="file" class="inputfile inputfile-2" id="imgEditPngIng" name="imgEditPngIng" accept=".png">
      <label for="imgEditPngIng"><span>Cambia la animación</span></label>
    </div>
  </div>
  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" name="button" id="btnEditarIng" onclick="editarIngrediente(<?= $Ingrediente[0]['Clave'] ?>)">Guardar Cambios</button>
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>

<?php } ?>
