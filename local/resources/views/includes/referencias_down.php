<!-- jQuery 3.1.1 -->
<script src="local/resources/views/plugins/jQuery/jquery-3.1.1.min.js">
</script>
<!-- Bootstrap 3.3.7 -->
<script src="local/resources/views/bootstrap/js/bootstrap.min.js">
</script>
<!-- SlimScroll -->
<script src="local/resources/views/plugins/slimScroll/jquery.slimscroll.min.js">
</script>
<!-- FastClick -->
<script src="local/resources/views/plugins/fastclick/fastclick.js">
</script>
<!-- AdminLTE App -->
<script src="local/resources/views/dist/js/adminlte.min.js">
</script>
<!-- AdminLTE for demo purposes -->

 

<script src="local/resources/views/dist/js/demo.js">
</script>


<script>
    $(document).ready(function () {
    $('.ta').val("")
  })
</script>
 <script type="text/javascript">
        $(document).on("scroll", function(){
        //sacamos el desplazamiento actual de la página
        var desplazamientoActual = $(document).scrollTop();
        var margen=desplazamientoActual+"px";
         if ($(window).width() > 767) { 
               $(".aside_left").css({"margin-top": margen});
         }  
    });        
</script>