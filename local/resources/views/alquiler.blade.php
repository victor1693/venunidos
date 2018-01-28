<!DOCTYPE html>
<html>
    <head>
        <title>
            Oferta de alquileres
        </title>
        <?php include('local/resources/views/includes/referencias_top.php');?>
    </head>
    <body class="skin-black fixed">
    <?php include('local/resources/views/includes/fondo_img.php');?>
        <!-- Site wrapper -->
        <div class="col-xs-12 sp " style="background-color: #e9ebee;margin-top: 50px;">
            <?php include('local/resources/views/includes/top_nav.php');?>
            <!-- Content Wrapper. Contains page content -->
            <!-- <div class="contenido" style="background-color: #f7f7f7;padding-bottom: 35px;position: fixed;z-index: 1;width: 100%;">
                aqui
            </div>-->
            <?php include('local/resources/views/includes/sub_header.php');?>
        </div>
        <div class="contenido" style="margin-top: 101px;">
            <div class="col-xs-12 sp " style="margin: 0 auto;">
                <div class="col-lg-2 col-sm-0">
                </div>
                <div class="col-sm-4 col-lg-2 sp" style="padding-top: 19px;">
                    <div class="box-body no-padding" style="">
                    
                       <?php include('local/resources/views/includes/paises.php');?>
                    
                        </div>
                </div>
                <div class="col-sm-8 col-lg-6 sp">
                    <!--Publicacion 1-->
                    <?php
                        if(session()->get('id')!==null)
                        { 
                            echo' ';
                        }
                    ?>
                   <div class="col-xs-12 sp" style="padding: 20px;">
                        <div class="input-group">
                          <span class="input-group-addon" style="padding-right: 48px;"><strong>Título</strong></span>
                          <input type="text" class="form-control" placeholder="Nombre de usuario">
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon"><strong>Descripción</strong></span>
                          <textarea class="form-control" style="resize: none;height: 100px;z-index: 0;"></textarea>
                        </div>
                        <label>Parametros</label>
                         <div class="col-sm-12 sp"  >
                            <div class="col-sm-3 sp">
                              <select class="form-control">
                              <option>Monto</option>
                              <option>20000 - 20000</option>
                                </select>
                            </div>
                               <div class="col-sm-3 sp">
                              <select class="form-control">
                              <option>Nacionalidad</option>                              
                                </select>
                            </div>

                              <div class="col-sm-3 sp">
                              <select class="form-control">
                              <option>Edad</option>
                                </select>
                            </div>                       
                            <div class="col-sm-3 sp">
                              <select class="form-control">
                              <option>Sexo</option>
                                </select>
                            </div>
                          </div>

                          <div class="col-sm-12 sp"   style="margin-top: 10px;"> 
                            <div class="col-sm-12 sp">
                              <button class="btn btn-xs btn-primary form-control">Publicar</button>
                            </div>                       
                           
                          </div>
                         
                    </div>


                    <div class="col-xs-12 sp publicacion">
                        <div class="box   box-widget" style="margin-bottom: 15px;border:2px solid #685687;">
                            <div class="box-header with-border" >
                                <div class="user-block">
                                    <img alt="User Image" class="img-circle" src="http://lorempixel.com/128/128">
                                        <span class="username">
                                            <a href="#">
                                                Jonathan Burke Jr. 
                                            </a>
                                        </span>
                                        <span class="description">
                                              <span style="color: #685687;"><strong>Oferta de alquiler</strong></span>
                                        </span>
                                    </img>
                                </div>
                                <!-- /.user-block -->
                                <div class="box-tools">

                                <button class="btn btn-box-tool" data-original-title="Fecha de publicación" data-toggle="tooltip" title="" type="button">
                                        <span style="color: #969696;font-size: 12px;">7:30 PM Hoy </span>
                                    </button>
                                    <button class="btn btn-box-tool" data-original-title="Mark as read" data-toggle="tooltip" title="" type="button">
                                        <i class="fa fa-circle-o">
                                        </i>
                                    </button>
                                     
                                    <button class="btn btn-box-tool" data-widget="remove" type="button">
                                        <i class="fa fa-times">
                                        </i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="padding-top: 0px;">
                                <!-- post text -->
                                <h4 class="text-light-blue" style="font-weight: 500;margin-top: 5px;color: "><a href="#"> Se necesita programador</a> </h4>
                                <h5  style="font-weight: bold;">$ 2000 - Completo - Sexo - Edad - Venezolano</h5>
                                <p>
                                    Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at
                                </p>
                                <p>
                                    the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies
                it with the necessary regelialia. It is a paradisematic
                country, in which roasted parts of sentences fly into
                your mouth.
                                <a href="#">Ver más</a></p> 
                            </div>
                            
                        </div>

                        <div class="box   box-widget" style="margin-bottom: 15px;border:2px solid #685687;">
                            <div class="box-header with-border" >
                                <div class="user-block">
                                    <img alt="User Image" class="img-circle" src="http://lorempixel.com/128/128">
                                        <span class="username">
                                            <a href="#">
                                                Jonathan Burke Jr. 
                                            </a>
                                        </span>
                                        <span class="description">
                                              <span style="color: #685687;padd"><strong>Oferta de alquiler</strong></span>
                                        </span>
                                    </img>
                                </div>
                                <!-- /.user-block -->
                                <div class="box-tools">

                                <button class="btn btn-box-tool" data-original-title="Fecha de publicación" data-toggle="tooltip" title="" type="button">
                                        <span style="color: #969696;font-size: 12px;">7:30 PM Hoy </span>
                                    </button>
                                    <button class="btn btn-box-tool" data-original-title="Mark as read" data-toggle="tooltip" title="" type="button">
                                        <i class="fa fa-circle-o">
                                        </i>
                                    </button>
                                     
                                    <button class="btn btn-box-tool" data-widget="remove" type="button">
                                        <i class="fa fa-times">
                                        </i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="padding-top: 0px;">
                                <!-- post text -->
                                <h4 class="text-light-blue" style="font-weight: 500;margin-top: 5px;color: "><a href="#"> Se necesita programador</a> </h4>
                                <h5  style="font-weight: bold;">$ 2000 - Completo - Sexo - Edad - Venezolano</h5>
                                <p>
                                    Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at
                                </p>
                                <p>
                                    the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies
                it with the necessary regelialia. It is a paradisematic
                country, in which roasted parts of sentences fly into
                your mouth.
                                <a href="#">Ver más</a></p> 
                            </div>
                            
                        </div>


<div class="box   box-widget" style="margin-bottom: 15px;border:2px solid #685687;">
                            <div class="box-header with-border" >
                                <div class="user-block">
                                    <img alt="User Image" class="img-circle" src="http://lorempixel.com/128/128">
                                        <span class="username">
                                            <a href="#">
                                                Jonathan Burke Jr. 
                                            </a>
                                        </span>
                                        <span class="description">
                                              <span style="color: #685687;padd"><strong>Oferta de alquiler</strong></span>
                                        </span>
                                    </img>
                                </div>
                                <!-- /.user-block -->
                                <div class="box-tools">

                                <button class="btn btn-box-tool" data-original-title="Fecha de publicación" data-toggle="tooltip" title="" type="button">
                                        <span style="color: #969696;font-size: 12px;">7:30 PM Hoy </span>
                                    </button>
                                    <button class="btn btn-box-tool" data-original-title="Mark as read" data-toggle="tooltip" title="" type="button">
                                        <i class="fa fa-circle-o">
                                        </i>
                                    </button>
                                     
                                    <button class="btn btn-box-tool" data-widget="remove" type="button">
                                        <i class="fa fa-times">
                                        </i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="padding-top: 0px;">
                                <!-- post text -->
                                <h4 class="text-light-blue" style="font-weight: 500;margin-top: 5px;color: "><a href="#"> Se necesita programador</a> </h4>
                                <h5  style="font-weight: bold;">$ 2000 - Completo - Sexo - Edad - Venezolano</h5>
                                <p>
                                    Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at
                                </p>
                                <p>
                                    the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies
                it with the necessary regelialia. It is a paradisematic
                country, in which roasted parts of sentences fly into
                your mouth.
                                <a href="#">Ver más</a></p> 
                            </div>
                            
                        </div>


<div class="box   box-widget" style="margin-bottom: 15px;border:2px solid #685687;">
                            <div class="box-header with-border" >
                                <div class="user-block">
                                    <img alt="User Image" class="img-circle" src="http://lorempixel.com/128/128">
                                        <span class="username">
                                            <a href="#">
                                                Jonathan Burke Jr. 
                                            </a>
                                        </span>
                                        <span class="description">
                                              <span style="color: #685687;padd"><strong>Oferta de alquiler</strong></span>
                                        </span>
                                    </img>
                                </div>
                                <!-- /.user-block -->
                                <div class="box-tools">

                                <button class="btn btn-box-tool" data-original-title="Fecha de publicación" data-toggle="tooltip" title="" type="button">
                                        <span style="color: #969696;font-size: 12px;">7:30 PM Hoy </span>
                                    </button>
                                    <button class="btn btn-box-tool" data-original-title="Mark as read" data-toggle="tooltip" title="" type="button">
                                        <i class="fa fa-circle-o">
                                        </i>
                                    </button>
                                     
                                    <button class="btn btn-box-tool" data-widget="remove" type="button">
                                        <i class="fa fa-times">
                                        </i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="padding-top: 0px;">
                                <!-- post text -->
                                <h4 class="text-light-blue" style="font-weight: 500;margin-top: 5px;color: "><a href="#"> Se necesita programador</a> </h4>
                                <h5  style="font-weight: bold;">$ 2000 - Completo - Sexo - Edad - Venezolano</h5>
                                <p>
                                    Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at
                                </p>
                                <p>
                                    the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies
                it with the necessary regelialia. It is a paradisematic
                country, in which roasted parts of sentences fly into
                your mouth.
                                <a href="#">Ver más</a></p> 
                            </div>
                            
                        </div>


                    </div>                     
                </div>
                <div class="col-lg-2 col-sm-0">
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <?php// include('local/resources/views/includes/footer.php');?>
        <!-- Control Sidebar -->
        <!-- ./wrapper -->
        <?php include('local/resources/views/includes/referencias_down.php');?>
    </body>
</html>
