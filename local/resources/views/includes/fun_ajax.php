<script type="text/javascript">
const MARGEN = .1;
var bandera=0;

$( document ).ready(function() { 
	listar_posts(bandera);   
});
$(function(){
 $(window).on("scroll",endPage)
})
function endPage(parametro){
 if(MARGEN > $(document).height() - $(window).scrollTop() - $(window).height()) {
 
 	bandera=bandera+10;
	listar_posts(bandera);
 }
}
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'); 

//Publicar noticia
function publicar_noticia()
	{
		if($("#alcance").val()==""){alert('Debe seleccionar el alcance de la noticia.');$("#alcance").focus();}
		else if($("#categoria").val()==""){alert('Debe seleccionar una categoría.');$("#categoria").focus();}
		else if($("#titulo").val()==""){alert('Colóquele el titulo a la publicación.');$("#titulo").focus();}
		else if($("#detalle").val()==""){alert('Complete el detalle de la publicación.');$("#detalle").focus();}
		else if($("#keywords").val()==""){alert('Coloque las palabras clave de esta publicación.');$("#keywords").focus();}
		
		else
		{
			$.ajax({
			  method: "POST",
			  dataType:"json",
			  url: "noticia",
			  data: { 
			_token: CSRF_TOKEN,
				detalle: $("#detalle").val(),
				categoria: $("#categoria").val(),
				keywords: $("#keywords").val(),
				alcance: $("#alcance").val(),
				titulo: $("#titulo").val(),},			 
			})
			  .done(function( datos ) { 
			  	 $("#detalle").val("");
				 $("#categoria").val("");
				 $("#keywords").val("");
				 $("#alcance").val("");
				 $("#titulo").val("");

				 
			  	/*contador=0;
			    $.each( datos, function( key, value ) { 
			    	 
			    		$( "#publicaciones" ).append(publicacion); 
			    	 	

	            });*/
	           }); 
		}		
	}

	function listar_posts(parametro)
	{
		$.ajax({
		  method: "POST",
		  dataType:"json",
		  url: "sposts",
		  data: { 
		_token: CSRF_TOKEN,
		detalle: parametro},		 
		})
		  .done(function( datos ) { 
		  	contador=0;
		    $.each( datos, function( key, value ) { 
		    	contador++;
		    	publicacion='<div class="col-xs-12 sp publicacion"> <div class="box box-publicacion box-widget"> <div class="box-header with-border"> <div class="user-block"> <img alt="User Image" class="img-circle" src="http://lorempixel.com/128/128"> <span class="username"> <a href="#"> '+datos[key]["nombre"]+' </a> </span> <span class="description">'+datos[key]["tmp"]+'</span> </img> </div> <!-- /.user-block --> <div class="box-tools"> <button class="btn btn-box-tool" data-original-title="Mark as read" data-toggle="tooltip" title="" type="button"> <i class="fa fa-circle-o"> </i> </button> <button class="btn btn-box-tool" data-widget="collapse" type="button"> <i class="fa fa-minus"> </i> </button> <button class="btn btn-box-tool" data-widget="remove" type="button"> <i class="fa fa-times"> </i> </button> </div> <!-- /.box-tools --> </div> <!-- /.box-header -->  <div class="box-body"> <p>'+datos[key]["detalle"]+'</p> <!-- post text --> <p> </p> <!-- Attachment --> <!-- /.attachment-block --> <!-- Social sharing buttons --> <button class="btn btn-default btn-xs" type="button"> <i class="fa fa-share"> </i> Share </button> <button class="btn btn-default btn-xs" type="button"> <i class="fa fa-thumbs-o-up"> </i> Like </button> <span class="pull-right text-muted"> 45 likes - 2 comments </span> </div> <!-- /.box-body --> <div class="box-footer box-comments"> <!-- /.box-comment --> <div class="box-comment"> <!-- User image --> <img alt="User Image" class="img-circle img-sm" src="http://lorempixel.com/128/128"> <div class="comment-text"> <span class="username"> Nora Havisham <span class="text-muted pull-right"> 8:03 PM Today </span> </span> <!-- /.username --> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English. </div> <!-- /.comment-text --> </img> </div> <!-- /.box-comment --> </div> <!-- /.box-footer --> <div class="box-footer"> <form action="#" method="post"> <img alt="Alt Text" class="img-responsive img-circle img-sm" src="http://lorempixel.com/128/128"> <!-- .img-push is used to add margin to elements next to floating images --> <div class="img-push"> <input class="form-control input-sm" placeholder="Press enter to post comment" type="text"> </input> </div> </img> </form> </div> <!-- /.box-footer --> </div> </div>';
		    	 
		    		$( "#publicaciones" ).append(publicacion); 
		    	 	 

            });});
	}

	function c_inicio()
	{
		var v_detalle=$("#post").val();			
		$.ajax({
		  method: "POST",
		  dataType:"json",
		  url: "test",
		  data: { 
		_token: CSRF_TOKEN,
		detalle: v_detalle},		 
		})
		  .done(function( datos ) {
		    $("#post").val("");
		    $.each( datos, function( key, value ) { 
		    	publicacion='<div class="col-xs-12 sp publicacion"> <div class="box box-publicacion box-widget"> <div class="box-header with-border"> <div class="user-block"> <img alt="User Image" class="img-circle" src="http://lorempixel.com/128/128"> <span class="username"> <a href="#"> '+datos[key]["nombre"]+' </a> </span> <span class="description">'+datos[key]["tmp"]+'</span> </img> </div> <!-- /.user-block --> <div class="box-tools"> <button class="btn btn-box-tool" data-original-title="Mark as read" data-toggle="tooltip" title="" type="button"> <i class="fa fa-circle-o"> </i> </button> <button class="btn btn-box-tool" data-widget="collapse" type="button"> <i class="fa fa-minus"> </i> </button> <button class="btn btn-box-tool" data-widget="remove" type="button"> <i class="fa fa-times"> </i> </button> </div> <!-- /.box-tools --> </div> <!-- /.box-header -->  <div class="box-body"> <p>'+datos[key]["detalle"]+'</p> <!-- post text --> <p> </p> <!-- Attachment --> <!-- /.attachment-block --> <!-- Social sharing buttons --> <button class="btn btn-default btn-xs" type="button"> <i class="fa fa-share"> </i> Share </button> <button class="btn btn-default btn-xs" type="button"> <i class="fa fa-thumbs-o-up"> </i> Like </button> <span class="pull-right text-muted"> 45 likes - 2 comments </span> </div> <!-- /.box-body --> <div class="box-footer box-comments"> <!-- /.box-comment --> <div class="box-comment"> <!-- User image --> <img alt="User Image" class="img-circle img-sm" src="http://lorempixel.com/128/128"> <div class="comment-text"> <span class="username"> Nora Havisham <span class="text-muted pull-right"> 8:03 PM Today </span> </span> <!-- /.username --> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English. </div> <!-- /.comment-text --> </img> </div> <!-- /.box-comment --> </div> <!-- /.box-footer --> <div class="box-footer"> <form action="#" method="post"> <img alt="Alt Text" class="img-responsive img-circle img-sm" src="http://lorempixel.com/128/128"> <!-- .img-push is used to add margin to elements next to floating images --> <div class="img-push"> <input class="form-control input-sm" placeholder="Press enter to post comment" type="text"> </input> </div> </img> </form> </div> <!-- /.box-footer --> </div> </div>';
		    	
		    	$( "#publicaciones" ).prepend(publicacion); 
            }); 
		  });
	}
	 

</script>