<header class="main-header">
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="margin: 0px;background-color: #004362;">
        <!-- Sidebar toggle button-->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                    <?php
                        if(session()->get('gestor_id')!==null)
                        { 
                            echo' <li class="user user-menu ">
                                    <a href="gestor_close" style="border: 0px;">
                                        <span class=" ">
                                            Salir
                                        </span>
                                    </a>                                 
                                ';
                        }                         
                    ?>  
            </ul>
        </div>
    </nav>
</header>