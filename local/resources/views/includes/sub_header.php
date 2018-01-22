<div class="col-xs-12 sp " style="position: fixed;z-index: 1;">
                <div class="col-lg-2 col-sm-0">
                    <div style="color: #f8f8f8;background-color: #f8f8f8;height: 5px;">
                        a
                    </div>
                </div>
                <nav class="navbar navbar-default ">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" data-target="#navbar7" data-toggle="collapse" type="button">
                                <span class="sr-only">
                                    Toggle navigation
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse " id="navbar7">
                            <ul class="nav navbar-nav " id="menu-subbarra">
                                <?php
                                    if(session()->get('nombre')!==null)
                                    { 
                                        echo'
                                <li>
                                    <a href="perfil">
                                        Mi perfil
                                    </a>
                                </li>
                                ';
                                    }
                                ?>
                                <li>
                                    <a href="#">
                                        Trabajos
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Alquileres
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Antes de migrar
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Experiencias
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Noticias
                                    </a>
                                </li>
                                <li>
                                    <a class="" data-toggle="dropdown" href="#" style="background-color: #f8f8f8;">
                                        <span class=" fa fa-inbox">
                                        </span>
                                        Pais
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                Page 1-1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Page 1-2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Page 1-3
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!--/.container-fluid -->
                </nav>
            </div>