<?php
include 'conexion.php';
$consulta_relacion_cliente_usuario = mysqli_query($conexion, "SELECT * FROM clientes WHERE id_cliente='$id_cliente'");
$datos_relacion_cliente_usuario = mysqli_fetch_array($consulta_relacion_cliente_usuario);
$id_entrenador = $_COOKIE['id_entrenador'];

?>
<!--ventana para Update--->
<div class="modal fade bd-example-modal-sm" id="actividad<?php echo $datos_relacion_cliente_datos['id_relacion_clientes_datos']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #e83e8c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          <center>
            <h4>Asignar Actividad</h4>
            <!--Datos modal interno de la primera tabla -->
          </center>
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="enviaractividad.php" method="POST">
        <input type="hidden" name="id" value="<?php $datos_relacion_cliente_datos['id_relacion_clientes_datos']; ?>">

        <div class="modal-body">

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Para:</label>
            <input type="text" class="form-control" id="recipient-name" value=<?php echo $datos_relacion_cliente_usuario['nombre_cliente']; ?> disabled>
            <br>
              <input type="text" class="form-control" placeholder="Nombre de la Actividad" name="nombreactividad" id="recipient-name" value="">          
          </div>
          <div class=" row mb-3">
            <input type="hidden" class="form-control" name="id_cliente" id="FormId" value="<?php echo $id_cliente ?>">
            <input type="hidden" class="form-control" name="id_entrenador" id="FormId" value="<?php echo $id_entrenador ?>">
            <div class="col">Numero de Serie:</label>
              <input type="number" class="form-control" name="serie" id="serie" value="0" required>
            </div>
            <div class="col">Numero de Repeticiones:</label>
              <input type="number" class="form-control" name="repeticiones" id="repeticiones" value="0" required>
            </div>
          </div>
          <div class=" row mb-3">
            <div class="col">Musculo Trabajado:</label>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="musculo" required>
                <option selected>Abrir Menu</option>
                <option value="Biceps">Biceps</option>
                <option value="Triceps">Triceps</option>
                <option value="Trapecio">Trapecio</option>
                <option value="Pectoral">Pectoral</option>
                <option value="Abdomen">Abdomen</option>
                <option value="Cuadriceps">Cuadriceps</option>
                <option value="Gluteos">Gluteos</option>
                <option value="Hombros">Hombros</option>
              </select>
              <br><br>
              <div class="col">Dificultad del ejercicio:</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="dificultad" required>
                  <option selected>Abrir Menu</option>
                  <option value="baja">Baja</option>
                  <option value="media">Media</option>
                  <option value="alta">Alta</option>
                </select>
              </div>
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Enviar Actividad</button>
            </div>
            </div>
            

          </div>

      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->