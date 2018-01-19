<!DOCTYPE html>
<html>
    <head>
        <title>
            AdminLTE 2 | Blank Page
        </title>
        <?php include('local/resources/views/includes/referencias_top.php');?>
    </head>
    <body class="skin-black fixed">
        <!-- Site wrapper -->
        <div class="col-xs-12 sp " style="background-color: #e9ebee;margin-top: 50px;">
            <?php include('local/resources/views/includes/top_nav.php');?>
        </div>
        <div class="register-box">
            <div class="register-logo">
                <a href="">
                    <b>
                        VEN
                    </b>
                    UNIDOS
                </a>
            </div>
            <div class="register-box-body">
                <form action="reguser" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <label>
                        Nombre
                    </label>
                    <div class="form-group has-feedback" style="margin-bottom: 0px;">
                        <input name="nombre" class="form-control" placeholder="Nombre" type="text">
                            <span class="glyphicon glyphicon-user form-control-feedback">
                            </span>
                        </input>
                    </div>
                    <label>
                        Correo
                    </label>
                    <div class="form-group has-feedback" style="margin-bottom: 0px;">
                        <input name="correo" class="form-control" placeholder="Correo" type="email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback">
                            </span>
                        </input>
                    </div>
                    <label>
                        Clave
                    </label>
                    <div class="form-group has-feedback" style="margin-bottom: 0px;">
                        <input name="p1" class="form-control" placeholder="Clave" type="password">
                            <span class="glyphicon glyphicon-lock form-control-feedback">
                            </span>
                        </input>
                    </div>
                    <label>
                        Repita su clave
                    </label>
                    <div class="form-group has-feedback">
                        <input name="p2" class="form-control" placeholder="Repita su clave" type="password">
                            <span class="glyphicon glyphicon-log-in form-control-feedback">
                            </span>
                        </input>
                    </div>
                    <div class="row ">
                        <!-- /.col -->
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-block btn-flat " style="float: right;" type="submit">
                                Registrar
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.content-wrapper -->
        <?php// include('local/resources/views/includes/footer.php');?>
        <!-- Control Sidebar -->
        <!-- ./wrapper -->
        <?php include('local/resources/views/includes/referencias_down.php');?>
    </body>
</html>
