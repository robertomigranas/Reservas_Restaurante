<div class="login-box">
  <div class="login-logo">
    <h1>Restaurante PHP</h1>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Loggin</p>
    <p class="login-box-msg">Ingresa para reservar su mesa</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="clave" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Adelante</button>
        </div>
        <!-- /.col -->
      </div>

      <?php

      $inicio = new UsuariosC();
      $inicio -> IniciarSesionC();

      ?>

    </form>

  </div>
  <!-- /.login-box-body -->
</div>