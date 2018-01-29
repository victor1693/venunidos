<!DOCTYPE html>
<html>
    <head>
        <title>
            Gestores
        </title>
        <?php include('local/resources/views/includes/referencias_top.php');?>
    </head>
    <body class="skin-black fixed">
        <!-- Site wrapper -->
        <div class="col-xs-12 sp " style="background-color: #e9ebee;margin-top: 50px;">
            <?php include('local/resources/views/includes/top_nav_gestores.php');?>
        </div>
        <div class="login-box">
            <div class="login-logo">
                <a href="">
                    <b>
                       Acceso
                    </b>
                     gestores
                </a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">
                    Complete los datos para iniciar sesión
                </p>
                <form action="gestores" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group has-feedback">
                        <input name="correo" class="form-control" placeholder="Correo" type="email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback">
                            </span>
                        </input>
                    </div>
                    <div class="form-group has-feedback">
                        <input name="pass" class="form-control" placeholder="Clave" type="password">
                            <span class="glyphicon glyphicon-lock form-control-feedback">
                            </span>
                        </input>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-block btn-flat" type="submit">
                                Entrar
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.content-wrapper -->
        <?php// include('local/resources/views/includes/footer.php');?>
        <!-- Control Sidebar -->
        <!-- ./wrapper -->
        <?php include('local/resources/views/includes/referencias_down.php');?>
    </body>
</html>
