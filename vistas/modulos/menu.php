<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu" data-widget="tree">

			<?php

				if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

					echo '<li><a href="inicio"><i class="fa fa-home text-purple"></i> <span>Inicio</span></a></li>

					<li><a href="lenguas"><i class="fa fa-language text-purple"></i> <span>Lenguas nativas</span></a></li>

					<li><a href="salas"><i class="fa fa-film text-purple"></i> <span>Salas de cine</span></a></li>';

				}


				if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

					echo '<li class="treeview menu-open">

						<a href="#">

							<i class="fa fa-laptop text-purple"></i> <span>Activos de información</span>

							<span class="pull-right-container">

								<i class="fa fa-angle-left pull-right"></i>

							</span>


						</a>

						<ul class="treeview-menu" style= "display: block;">

							<li><a href="categorias"><i class="fa fa-circle-o"></i>Categorias</a></li>

							<li><a href="activos"><i class="fa fa-circle-o"></i>Activos</a></li>

							<li><a href="indices"><i class="fa fa-circle-o"></i>Índices</a></li>

						</ul>

					</li>';

				}


				if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

					echo '<li class="treeview menu-open">

						<a href="#">

							<i class="fa fa-book text-purple"></i> <span>Directorio</span>

							<span class="pull-right-container">

								<i class="fa fa-angle-left pull-right"></i>

							</span>

						</a>

						<ul class="treeview-menu" style= "display: block;">

							<li><a href="bibliotecas"><i class="fa fa-circle-o"></i>Bibliotecas</a></li>

							<li><a href="geoportal"><i class="fa fa-circle-o"></i>Geoportal</a></li>

						</ul>

					</li>';

				}


				if($_SESSION["perfil"] == "Administrador"){

					echo '<li><a href="usuarios"><i class="fa fa-user text-purple"></i> <span>Usuarios</span></a></li>';

				}


				if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

					echo '<li><a href="documentacion"><i class="fa fa-eye text-purple"></i> <span>Documentación</span></a></li>';

				}			

			?>

		</ul>

	</section>

</aside>