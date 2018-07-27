 <header class="main-header">
 	
	<!--=====================================
	LOGOTIPO
	======================================-->
	<a href="inicio" class="logo">
		
		<!-- logo mini -->
		<span class="logo-mini">

			<i class="fa fa-flag-o" aria-hidden="true"></i>

		</span>

		<!-- logo normal -->

		<span class="logo-lg">

			<span><i class="fa fa-flag-o" aria-hidden="true"></i>  | Si<b>Cultura</b></span>

		</span>

	</a>

	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" role="navigation">
		
		<!-- Botón de navegación -->

	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        	
        	<span class="sr-only">Toggle navigation</span>
      	
      	</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">
				
			<ul class="nav navbar-nav">
				
				<li class="dropdown user user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					<?php

					if($_SESSION["foto"] != ""){

						echo '<img src="'.$_SESSION["foto"].'" class="user-image">';

					}else{


						echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';

					}


					?>
						
						<span class="hidden-xs">Bienvenid@, <?php  echo $_SESSION["nombre"]; ?></span>
						

					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">

						<li class="user-header">

							<?php

							if($_SESSION["foto"] != ""){

								echo '<img src="'.$_SESSION["foto"].'" class="img-circle">';

							}else{


								echo '<img src="vistas/img/usuarios/default/anonymous.png" class="img-circle">';

							}


							?>

							<p><?php  echo $_SESSION["nombre"]; ?>

							 	<small><i class="fa fa-key"></i> <?php  echo $_SESSION["perfil"]; ?></small>
							 </p>
				

						</li>

						<!-- Menu Footer-->
						<li class="user-footer">

							<div class="pull-right">

								<a href="salir" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Salir</a>

							</div>
						</li>

					</ul>

				</li>

			</ul>

		</div>

	</nav>

 </header>

