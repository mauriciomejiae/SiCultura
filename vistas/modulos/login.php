<div id="back"></div>

<div class="login-box left">

  <div class="login-logo">

    <a> <i class="fa fa-flag-o" aria-hidden="true"></i>  | Sistema de información de la <b>Cultura</b></a>

   </div>

  <div class="login-box-body">

    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">  

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
       
        <div class="col-lg-4 col-xs-6">

          <button type="submit" class="btn btn-success btn-block btn-flat"><i class="fa fa-sign-in"></i> Ingresar</button>
    
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div>

</div>


