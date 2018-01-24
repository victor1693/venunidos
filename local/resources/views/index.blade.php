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
                            <textarea class="ta form-control" placeholder="¿Qué hay de nuevo?" style="resize: none;height: 100px;">
                            </textarea>                         
                            <button class="btn btn-xs form-control btn-primary pull-right" style="margin-top: 5px;">Publicar</button>
                        </div>';
                        }
                    ?>
                   
                    <div class="col-xs-12 sp publicacion">
                        <div class="box box-publicacion box-widget">
                            <div class="box-header with-border">
                                <div class="user-block">
                                    <img alt="User Image" class="img-circle" src="http://lorempixel.com/128/128">
                                        <span class="username">
                                            <a href="#">
                                                Jonathan Burke Jr.
                                            </a>
                                        </span>
                                        <span class="description">
                                            Shared publicly - 7:30 PM Today
                                        </span>
                                    </img>
                                </div>
                                <!-- /.user-block -->
                                <div class="box-tools">
                                    <button class="btn btn-box-tool" data-original-title="Mark as read" data-toggle="tooltip" title="" type="button">
                                        <i class="fa fa-circle-o">
                                        </i>
                                    </button>
                                    <button class="btn btn-box-tool" data-widget="collapse" type="button">
                                        <i class="fa fa-minus">
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
                            <div class="box-body">
                                <!-- post text -->
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
                                </p>
                                <!-- Attachment -->
                                <div class="attachment-block clearfix">
                                    <img alt="Attachment Image" class="attachment-img" src="http://lorempixel.com/128/128">
                                        <div class="attachment-pushed">
                                            <h4 class="attachment-heading">
                                                <a href="http://www.lipsum.com/">
                                                    Lorem ipsum text generator
                                                </a>
                                            </h4>
                                            <div class="attachment-text">
                                                Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                                                <a href="#">
                                                    more
                                                </a>
                                            </div>
                                            <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-pushed -->
                                    </img>
                                </div>
                                <!-- /.attachment-block -->
                                <!-- Social sharing buttons -->
                                <button class="btn btn-default btn-xs" type="button">
                                    <i class="fa fa-share">
                                    </i>
                                    Share
                                </button>
                                <button class="btn btn-default btn-xs" type="button">
                                    <i class="fa fa-thumbs-o-up">
                                    </i>
                                    Like
                                </button>
                                <span class="pull-right text-muted">
                                    45 likes - 2 comments
                                </span>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer box-comments">
                                <div class="box-comment">
                                    <!-- User image -->
                                    <img alt="User Image" class="img-circle img-sm" src="http://lorempixel.com/128/128">
                                        <div class="comment-text">
                                            <span class="username">
                                                Maria Gonzales
                                                <span class="text-muted pull-right">
                                                    8:03 PM Today
                                                </span>
                                            </span>
                                            <!-- /.username -->
                                            It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                                        </div>
                                        <!-- /.comment-text -->
                                    </img>
                                </div>
                                <!-- /.box-comment -->
                                <div class="box-comment">
                                    <!-- User image -->
                                    <img alt="User Image" class="img-circle img-sm" src="http://lorempixel.com/128/128">
                                        <div class="comment-text">
                                            <span class="username">
                                                Nora Havisham
                                                <span class="text-muted pull-right">
                                                    8:03 PM Today
                                                </span>
                                            </span>
                                            <!-- /.username -->
                                            The point of using Lorem Ipsum is that it has a more-or-less
                  normal distribution of letters, as opposed to using
                  'Content here, content here', making it look like readable English.
                                        </div>
                                        <!-- /.comment-text -->
                                    </img>
                                </div>
                                <!-- /.box-comment -->
                            </div>
                            <!-- /.box-footer -->
                            <div class="box-footer">
                                <form action="#" method="post">
                                    <img alt="Alt Text" class="img-responsive img-circle img-sm" src="http://lorempixel.com/128/128">
                                        <!-- .img-push is used to add margin to elements next to floating images -->
                                        <div class="img-push">
                                            <input class="form-control input-sm" placeholder="Press enter to post comment" type="text">
                                            </input>
                                        </div>
                                    </img>
                                </form>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                    </div>
                    <!--Publicaion2-->
                    <div class="col-xs-12 sp publicacion">
                        <div class="box-publicacion box box-widget">
                            <div class="box-header with-border">
                                <div class="user-block">
                                    <img alt="User Image" class="img-circle" src="http://lorempixel.com/128/128">
                                        <span class="username">
                                            <a href="#">
                                                Jonathan Burke Jr.
                                            </a>
                                        </span>
                                        <span class="description">
                                            Shared publicly - 7:30 PM Today
                                        </span>
                                    </img>
                                </div>
                                <!-- /.user-block -->
                                <div class="box-tools">
                                    <button class="btn btn-box-tool" data-original-title="Mark as read" data-toggle="tooltip" title="" type="button">
                                        <i class="fa fa-circle-o">
                                        </i>
                                    </button>
                                    <button class="btn btn-box-tool" data-widget="collapse" type="button">
                                        <i class="fa fa-minus">
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
                            <div class="box-body">
                                <!-- post text -->
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
                                </p>
                                <!-- Attachment -->
                                <div class="attachment-block clearfix">
                                    <img alt="Attachment Image" class="attachment-img" src="http://lorempixel.com/128/128">
                                        <div class="attachment-pushed">
                                            <h4 class="attachment-heading">
                                                <a href="http://www.lipsum.com/">
                                                    Lorem ipsum text generator
                                                </a>
                                            </h4>
                                            <div class="attachment-text">
                                                Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                                                <a href="#">
                                                    more
                                                </a>
                                            </div>
                                            <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-pushed -->
                                    </img>
                                </div>
                                <!-- /.attachment-block -->
                                <!-- Social sharing buttons -->
                                <button class="btn btn-default btn-xs" type="button">
                                    <i class="fa fa-share">
                                    </i>
                                    Share
                                </button>
                                <button class="btn btn-default btn-xs" type="button">
                                    <i class="fa fa-thumbs-o-up">
                                    </i>
                                    Like
                                </button>
                                <span class="pull-right text-muted">
                                    45 likes - 2 comments
                                </span>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer box-comments">
                                <div class="box-comment">
                                    <!-- User image -->
                                    <img alt="User Image" class="img-circle img-sm" src="http://lorempixel.com/128/128">
                                        <div class="comment-text">
                                            <span class="username">
                                                Maria Gonzales
                                                <span class="text-muted pull-right">
                                                    8:03 PM Today
                                                </span>
                                            </span>
                                            <!-- /.username -->
                                            It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                                        </div>
                                        <!-- /.comment-text -->
                                    </img>
                                </div>
                                <!-- /.box-comment -->
                                <div class="box-comment">
                                    <!-- User image -->
                                    <img alt="User Image" class="img-circle img-sm" src="http://lorempixel.com/128/128">
                                        <div class="comment-text">
                                            <span class="username">
                                                Nora Havisham
                                                <span class="text-muted pull-right">
                                                    8:03 PM Today
                                                </span>
                                            </span>
                                            <!-- /.username -->
                                            The point of using Lorem Ipsum is that it has a more-or-less
                  normal distribution of letters, as opposed to using
                  'Content here, content here', making it look like readable English.
                                        </div>
                                        <!-- /.comment-text -->
                                    </img>
                                </div>
                                <!-- /.box-comment -->
                            </div>
                            <!-- /.box-footer -->
                            <div class="box-footer">
                                <form action="#" method="post">
                                    <img alt="Alt Text" class="img-responsive img-circle img-sm" src="http://lorempixel.com/128/128">
                                        <!-- .img-push is used to add margin to elements next to floating images -->
                                        <div class="img-push">
                                            <input class="form-control input-sm" placeholder="Press enter to post comment" type="text">
                                            </input>
                                        </div>
                                    </img>
                                </form>
                            </div>
                            <!-- /.box-footer -->
                            <div class="col-xs-12 sp text-center" style="padding-top: 25px;">
                                <button class="btn btn-xs btn-primary" style="padding-left: 25px;padding-right: 25px;">
                                    Ver más
                                </button>
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
