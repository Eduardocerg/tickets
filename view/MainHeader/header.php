<header class="site-header">
    <div class="container-fluid">	
        <a href="#" class="site-logo">
<h4>Grupo Libertad</h4>
        </a>
        
        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>
            
        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>			
        
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../public/<?php echo $_SESSION["rol_id"]?>.jpg" alt="">
                         </button>
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="../MntPerfil/"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../index.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesion</a>
                        </div>
                    </div>
         
                    
                    <div class="mobile-menu-right-overlay"></div>

                    <input type="hidden" id="user_idx" value="<?php echo $_SESSION["usu_id"]?>"><!--ID del Contacto-->
                    <input type="hidden" id="rol_idx" value="<?php echo $_SESSION["rol_id"]?>"><!--Rol del Usuario-->


                    <div class="dropdown dropdown-typical">
                        <a href="../MntPerfil/" class="dropdown-toggle no-arr">
                            <span class="font-icon font-icon-user"></span>
                            <span class="lblcontactonomx"><?php echo $_SESSION ["usu_nom"] ?> <?php echo $_SESSION ["usu_ape"] ?> </span>
                        </a>
                    </div>

            </div>
         </div>
    </div>
</header>