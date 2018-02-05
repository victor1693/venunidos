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
                    <form action="noticia" method="post">
                        <div class="col-sm-12 sp" style="margin-bottom: 5px;">
                            <div class="col-sm-4 sp">
                                <select id="alcance" name="alcance" class="form-control">
                                    <option value="">
                                        Alcance
                                    </option>
                                    <option value="89">
                                        Perú
                                    </option>
                                    <option value="12">
                                        Venezuela
                                    </option>
                                    <option value="247">
                                        Todos los paises
                                    </option>
                                </select>
                            </div>
                            <div class="col-sm-4 sp">
                                <select id="categoria" class="form-control" name="categoria">
                                    <option value="">
                                        Categoría
                                    </option>
                                    <option value="1">
                                        General
                                    </option>
                                </select>
                            </div>
                        </div>
                        <input id="titulo" name="titulo" class="form-control" name="" placeholder="Título" type="text">
                        </input>
                        <textarea id="detalle" name="detalle" class="form-control ta" placeholder="Pega tu puplicación aquí..." style="resize: none;height: 100px; ">
                        </textarea>
                        <input id="keywords" name="keywords" class="form-control" name="" placeholder="Palabras claves" type="text">
                        </input>
                    </form>
                    <div class="text-right">
                        <buttom id="publicar_noticia" onClick="publicar_noticia()" class="btn btn-xs btn-primary " href="" style="margin-top: 5px;" target="_blank">
                            Publicar
                        </buttom>
                    </div>
                    <div class="box box-widget " style="position: relative; left: 0px; top: 10px;">
                        <div class="box-body">
                            <span style="font-size: 16px;">
                                <strong>
                                    Noticias publicadas
                                </strong>
                            </span>
                            <span class="pull-right">
                                <strong>
                                    <?php echo $cantidad[0]->cantidad ?>
                                </strong>
                            </span>
                        </div>
                    </div>
                    <?php
                        foreach ($datos as $key) {
                            $estado=0;
                            if($key->estado==2){$estado=1;}
                            if($key->estado==1){$estado=$key->estado;}
                            $pausa="";
                            if($key->estado==2){$pausa="(Pausada)";}
                            echo '<div class="box box-widget">
                        <div class="box-header with-border">
                            <div class="user-block">
                                <span class="username" style="margin-left: 0px;">
                                    <a href="noticias/'.$key->url.'">
                                        '.$key->titulo.'
                                    </a>
                                   <span style="font-size:10px;"><strong>'.$pausa.'</strong></span>
                                </span>
                                <span class="description" style="margin-left: 0px;">
                                    Publicado: '.$key->tmp.'
                                </span>
                            </div>
                            <!-- /.user-block -->
                            <div class="box-tools">
                                <button class="btn btn-box-tool" type="button">
                                    <a href="noticias/'.$key->url.'"><i class="fa fa-eye">
                                    </i></a>
                                </button>
                                <button onClick="status_noticia('.$key->id.','. $estado.')" class="btn btn-box-tool" type="button">
                                    <i class="fa fa-pause">
                                    </i>
                                </button>
                                <button class="btn btn-box-tool" type="button">
                                    <i class="fa fa-pencil-square-o">
                                    </i>
                                </button>
                                <button onClick="status_noticia('.$key->id.',3)" class="btn btn-box-tool" type="button">
                                    <i class="fa fa-trash-o">
                                    </i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>                        
                    </div>';
                        }
                    ?>
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
