<!DOCTYPE html>
<html>
    <head>
        <title>
            AdminLTE 2 | Blank Page
        </title>
        <?php include('local/resources/views/includes/referencias_top.php');?>
        <meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
    </head>
    <body class="skin-black fixed">
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
            <div class="col-xs-12 sp " style="margin: 0 auto;background-color: #efefef;">
                <div class="col-lg-2 col-sm-0">
                </div>
                <div class="col-sm-4 col-lg-2 sp" style="padding-top: 19px;">
                    <div class="box box-solid">
                     <?php include('local/resources/views/includes/paises.php');?> 
                    </div>
                </div>
                <div class="col-sm-8 col-lg-6 sp">
                    <!--Publicacion 1-->
                    <?php
                        if(session()->get('id')!==null)
                        { 
                            echo' <div class="col-xs-12 sp" style="padding: 20px;">
                            <textarea id="post" class="ta form-control" placeholder="¿Qué hay de nuevo?" style="resize: none;height: 100px;">
                            </textarea>                         
                            <button class="btn btn-xs form-control btn-primary pull-right" style="margin-top: 5px;" onClick="c_inicio()">Publicar</button>
                        </div>';
                        }
                    ?>
                   
                   <div class="col-xs-12 sp" id="publicaciones">
                       
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
