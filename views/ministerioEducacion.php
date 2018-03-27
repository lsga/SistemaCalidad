<script>


      function mostrar_proceso(idComponente,nombreComponente){
       //   document.getElementById('ruta').innerHTML= "<a href=#>" +nombreAmbito+ "</a>"  ;


            if(idComponente=1) {

               $("#idComponente1").load('../controller/proceso_controller.php?idComponente='+idComponente);
            }

            if(idComponente=2){

                $("#idComponente2").load('../controller/proceso_controller.php?idComponente='+idComponente);

              }
                if(idComponente=3) {

                $("#idComponente3").load('../controller/proceso_controller.php?idComponente='+idComponente);

                 }

                 if(idComponente=4)
                 {

                 $("#idComponente4").load('../controller/proceso_controller.php?idComponente='+idComponente);

                 }
                 if(idComponente=5)
                 {

                 $("#idComponente5").load('../controller/proceso_controller.php?idComponente='+idComponente);

                 }

     }


     function procesarProceso(idProceso,nombreProceso){
     //alert(nombreitem);
       var nombrediv='#div'+idProceso;

   //document.getElementById('ruta').innerHTML =  document.getElementById('ruta').innerHTML + "/"+ "<a href=# onclick= numbers.forEach(myFunction) >" +nombreitem +  "</a>" ;

      $(nombrediv).load('../controller/proceso_controller.php?idProceso='+idProceso);


    }


 function procesarElemento(idElemento,nombreElemento)  {
    //alert(nombreindicador);
    // document.getElementById('ruta').innerHTML=  document.getElementById('ruta').innerHTML + "/"+ "<a href=#>"+  nombreindicador+"</a>" ;

     var nombrediv= '#div'+idElemento;
    $(nombrediv).load('../controller/proceso_controller.php?idElemento='+idElemento);

     //$("#columnader").load("../views/pregunta_view.php");


    }

    function procesarIndicadorMinisterio(idIndicadorME,codigoME)  {
       //alert(nombreindicador);
       // document.getElementById('ruta').innerHTML=  document.getElementById('ruta').innerHTML + "/"+ "<a href=#>"+  nombreindicador+"</a>" ;

        var nombrediv= idIndicadorME;
       $(nombrediv).load('../views/preguntaMinisterio_view.php?idIndicadorME='+idIndicadorME);

       $("#columnader").load('../views/preguntaMinisterio_view.php?idIndicadorME='+idIndicadorME);

        //$("#columnader").load("../views/pregunta_view.php");


       }



</script>
<?php
//session_start();
$titulo_pagina = "Sistema.... - Pagina Principal";
include(dirname(dirname(__FILE__))."/util/Seguridad.php");
include(dirname(dirname(__FILE__))."/util/config.php");
include(dirname(dirname(__FILE__))."/includes/headerMinisterio.php");
?>
<?php if(isset($_SESSION["sesion"])){ ?>
<div id="principal">
	  	<?php include(dirname(__FILE__)."/infoUsuario.php")?>
	<div id="columnader">
           <img src="<?php echo $path?>/img/Grafico.png" style="margin-top:35px;"/>
	</div>

</div>
<?php }else{
            echo '<div id="columnader" ></div>';
	header("Location: ../error.php/?codigo=1");
}
?>
<?php
//include(dirname(dirname(__FILE__))."/includes/footer.php");
?>
