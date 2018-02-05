<!DOCTYPE html>
<html>
    <head>
        <title>
            Noticias
        </title>
        <?php include('local/resources/views/includes/referencias_top.php');?>
        <meta content="<?php echo csrf_token(); ?>" name="csrf-token"/>
    </head>
    <body class="skin-black fixed">
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
                    <div class="box box-solid" style="top: 0px;">
                        <?php include('local/resources/views/includes/paises_gestores.php');?>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-6 sp" style="padding-top: 19px;padding-left: 20px;">
                    
                    <div class="box box-widget " style="position: relative; left: 0px; top: 10px;">
                        <div class="box-body">
                            <?php
                                foreach ($datos as $key) {
                                    echo $key->detalle;
                                }
                            ?>
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
        <?php include('local/resources/views/includes/fun_ajax.php');?>
    </body>
</html>
