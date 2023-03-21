<!--ventana para Update--->
<div class="modal fade bd-example-modal-sm" id="editChildresn<?php echo $datos_relacion_cliente_datos['id_relacion_clientes_datos']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #e83e8c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          <center>
            <h3>Otros Datos</h3>
            <!--Datos modal interno de la primera tabla -->
          </center>
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form>
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

        <div class="modal-body" id="cont_modal">
          <div class="row"><div class="col">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label text-left"><h5>Peso:</h5></label>
            <label for="recipient-name" class="col-form-label"><h5><?php echo $datos_relacion_cliente_datos['peso_cliente']; ?> Kg</h5></label>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><h5>Altura:</h5></label>
            <label for="recipient-name" class="col-form-label"><h5><?php echo $datos_relacion_cliente_datos['altura_cliente']; ?> M</h5></label>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><h5>Edad:</h5></label>
            <label for="recipient-name" class="col-form-label"><h5><?php echo $datos_relacion_cliente_datos['edad_cliente']; ?> Años</h5></label>
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><h5>Cintura:</h5></label>
            <label for="recipient-name" class="col-form-label"><h5><?php echo $datos_relacion_cliente_datos['medida_cintura_cliente']; ?></h5></label>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><h5>brazos:</h5></label>
            <label for="recipient-name" class="col-form-label"><h5><?php echo $datos_relacion_cliente_datos['medida_brazo_cliente']; ?></h5></label>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><h5>Piernas:</h5></label>
            <label for="recipient-name" class="col-form-label"><h5><?php echo $datos_relacion_cliente_datos['medida_pierna_cliente']; ?></h5></label>
          </div>

          


        </div>
          <div class="col">
          <!--<img src="./images/avatar-tablas.png" width="100" height="100">-->
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
