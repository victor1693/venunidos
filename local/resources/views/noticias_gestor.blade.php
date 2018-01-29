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
                    <form action="#" method="post">
                        <div class="col-sm-12 sp" style="margin-bottom: 5px;">
                            <div class="col-sm-4 sp">
                                <select class="form-control">
                                    <option>
                                        Alcance
                                    </option>
                                    <option>
                                        Venezuela
                                    </option>
                                    <option>
                                        Todos los paises
                                    </option>
                                </select>
                            </div>
                        </div>
                        <textarea class="form-control ta" style="resize: none;height: 100px; ">
                        </textarea>
                    </form>
                    <a class="btn btn-xs btn-primary" href="https://htmleditor.io/" style="margin-top: 5px;" target="_blank">
                        Editar noticia
                    </a>
                    <a class="btn btn-xs btn-primary pull-right" href="https://htmleditor.io/ " style="margin-top: 5px;" target="_blank">
                        Publicar
                    </a>
                    <div class="box box-widget " style="position: relative; left: 0px; top: 10px;">
                        <div class="box-body">
                            <span style="font-size: 16px;">
                                <strong>
                                    Noticias publicadas
                                </strong>
                            </span>
                            <span class="pull-right">
                                <strong>
                                    98
                                </strong>
                            </span>
                        </div>
                    </div>
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <div class="user-block">
                                <span class="username" style="margin-left: 0px;">
                                    <a href="#">
                                        Jonathan Burke Jr.
                                    </a>
                                </span>
                                <span class="description" style="margin-left: 0px;">
                                    Shared publicly - 7:30 PM Today
                                </span>
                            </div>
                            <!-- /.user-block -->
                            <div class="box-tools">
                                <button class="btn btn-box-tool" type="button">
                                    <i class="fa fa-eye">
                                    </i>
                                </button>
                                <button class="btn btn-box-tool" type="button">
                                    <i class="fa fa-pause">
                                    </i>
                                </button>
                                <button class="btn btn-box-tool" type="button">
                                    <i class="fa fa-pencil-square-o">
                                    </i>
                                </button>
                                <button class="btn btn-box-tool" type="button">
                                    <i class="fa fa-trash-o">
                                    </i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- post text -->
                            <p>
                                Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at
                            </p>
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
