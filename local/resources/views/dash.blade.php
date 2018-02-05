<!DOCTYPE html>
<html>
    <head>
        <title>
            Gestores
        </title>
        <?php include('local/resources/views/includes/referencias_top.php');?>
        <meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
    </head>
    <body class="skin-black fixed"  >
    <?php include('local/resources/views/includes/fondo_img.php');?>
        <!-- Site wrapper -->
        <div class="col-xs-12 sp " style="background-color: #e9ebee;margin-top: 50px;">
            <?php include('local/resources/views/includes/top_nav_gestores.php');?>
           
            <?php include('local/resources/views/includes/sub_header_gestores.php');?>
        </div>
        <div class="contenido" style="margin-top: 101px;">
            <div class="col-xs-12 sp " style="margin: 0 auto;">
                <div class="col-lg-2 col-sm-0">
                </div>
                <div class="col-sm-4 col-lg-2 sp aside_left" style="padding-top: 19px;">
                    <div class="box box-solid" style="top: 0px;" >
                     <?php include('local/resources/views/includes/paises_gestores.php');?> 
                    </div>
                </div>
                <div class="col-sm-8 col-lg-6 sp">
                    
                   
                   <div class="col-xs-12 sp"  style="padding-top: 19px;">
                       <div class="col-lg-6 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-green">
                            <div class="inner">
                              <h3><?php echo $datos[0]->cantidad?></h3>

                              <p>Noticias</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="gnoticias" class="small-box-footer">
                              Ver todo <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>

                        <div class="col-lg-6 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-yellow">
                            <div class="inner">
                              <h3><?php echo $articulos[0]->cantidad?></h3> 
                              <p>Artículos</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">
                              Ver todo<i class="fa fa-arrow-circle-right"></i>
                            </a>
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
