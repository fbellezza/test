 <div class="card">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL FORMULARIO
        ======================================-->

        <div class="card-header" style="background: #343a40; color: #fff;">

          <h4 class="card-title">Alta Nuevo Usuario</h4>

        </div>


        <!--=====================================
        CUERPO DEL FORMULARIO
        ======================================-->

        

          <div class="card-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            <div class="input-group mb-3">
              <!--<div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>-->
              <input type="text" name="nuevoNombre" class="form-control" placeholder="Nombre">
            </div> 

            <!-- ENTRADA PARA EL APELLIDO -->
            <div class="input-group mb-3">
              <!--<div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
              </div>-->
              <input type="text" name="nuevoApellido" class="form-control" placeholder="Apellido">
            </div>            

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="input-group mb-3">
              <!--<div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>-->
                <input type="mail" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Mail" id="nuevoUsuario" required>
              </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="input-group mb-3">
             <!-- <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
              </div>-->
                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

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

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>

