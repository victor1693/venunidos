<!DOCTYPE html>
<html>
    <head>
        <title>
            Configuración
        </title>
        <?php include('local/resources/views/includes/referencias_top.php');?>
    </head>
    <body class="skin-black fixed">
    <?php include('local/resources/views/includes/fondo_img.php');?>
        <!-- Site wrapper -->
        <div class="col-xs-12 sp " style="background-color: #e9ebee;margin-top: 50px;">
            <?php include('local/resources/views/includes/top_nav.php');?>            
            <?php include('local/resources/views/includes/sub_header.php');?>
        </div>
        <div class="contenido" style="margin-top: 101px; ">
            <div class="col-xs-12 sp " style="margin: 0 auto;min-height: 650px;">
                <div class="col-lg-2 col-sm-0">
                </div>
                  <?php include('local/resources/views/includes/menu_left_configuraciones.php');?>
                <div class="col-sm-8 col-lg-6 sp">
                   

                     <div class="col-sm-12" style="padding-top: 19px;">
                        <div class="box box-success">
                            <div class="box-header with-border">
                              <h3 class="box-title">Privacidad</h3> 
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                            <div class="col-sm-6 sp">
                                  aqui
                             </div>
                             <div class="col-sm-6 sp">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Hacer mi perfil público.
                                  </label>
                                </div>
                                <div class="col-xs-12 sp" style="padding-left: 20px;margin-top: -15px">
                                 <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Mostrar mi CV
                                  </label>
                                </div>
                                  <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Mostrar "Conóceme"
                                  </label>
                                </div>
                                 <div class="col-xs-12 sp" style="padding-left: 20px;margin-top: -15px;">
                                      <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Mostrar dirección
                                      </label>
                                    </div>
                                     <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Mostrar educación
                                      </label>
                                    </div>
                                      
                                     <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Edad
                                      </label>
                                    </div>
                                     <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Sexo
                                      </label>
                                    </div>
                                     <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Descripción
                                      </label>
                                    </div>
                                 </div>

                                </div>
                                  <div class="text-center"  >
                                    <button class="btn btn-xs btn-primary">Actualizar</button>
                                  </div>
                             </div>
                            </div>
                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
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
