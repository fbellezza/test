 <div class="card">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL FORMULARIO
        ======================================-->

        <div class="card-header" style="background: #343a40; color: #fff;">

          <h4 class="card-title">Modificar Contraseña</h4>

        </div>


        <!--=====================================
        CUERPO DEL FORMULARIO
        ======================================-->

        

          <div class="card-body">

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="input-group mb-3">
             <!-- <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
              </div>-->
                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Ingresar Nueva contraseña" required>

              </div>       

        <!--=====================================
        PIE DEL FORMULARIO
        ======================================-->

        <div class="card-footer">

        <a href="inicio">
          <button type="button" class="btn btn-default">Volver</button>
        </a>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

        <?php

          $cambiarPass = new ControladorUsuarios();
          $cambiarPass -> ctrCambiarPass();

        ?>

      </form>

    </div>

