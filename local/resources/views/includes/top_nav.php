<header class="main-header">
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="margin: 0px;background-color: #004362;">
        <!-- Sidebar toggle button-->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                    <?php
                        if(session()->get('id')!==null)
                        { 
                            echo' <li class="user user-menu ">
                                    <a href="close" style="border: 0px;">
                                        <span class=" ">
                                            Salir
                                        </span>
                                    </a>
                                </li> <li class="user user-menu ">
                                    <a class="" href="perfil" style="border: 0px;"> 
                                          <img class="user-image" src="https://avatars.articulate.com/user/avatar/8cbfa0d0-b37e-0131-2ee8-22000b2f96a1/micro_1406930863.png">
                                            <span class="hidden-xs">
                                               '.session()->get("nombre").'
                                            </span>
                                        </img> 
                                    </a>
                                </li>
                                ';
                        }
                        else
                        {
                            echo'<li class="user user-menu ">
                                    <a class="" href="reguser" style="border: 0px;">
                                        <span class=" ">
                                            Regístrate
                                        </span> 
                                    </a>
                                </li>
                                <li class=" user user-menu ">
                                    <a href="sesion" style="border: 0px;">
                                        <span class=" ">
                                            Iniciar sesión
                                        </span>
                                    </a>
                                </li>'; 
                        }
                    ?>  
            </ul>
        </div>
    </nav>
</header>