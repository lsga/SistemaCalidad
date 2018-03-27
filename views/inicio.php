
<script>


      function mostrar_item(idAmbito,nombreAmbito){
       //   document.getElementById('ruta').innerHTML= "<a href=#>" +nombreAmbito+ "</a>"  ;
            
            
            if(idAmbito=1) {
               
               $("#idAmbito1").load('../controller/item_controller.php?idAmbito='+idAmbito);
            }
           
            if(idAmbito=2){

                $("#idAmbito2").load('../controller/item_controller.php?idAmbito='+idAmbito);
                
              }
                if(idAmbito=3) {
            
                $("#idAmbito3").load('../controller/item_controller.php?idAmbito='+idAmbito);

                 }
                
                 if(idAmbito=4) 
                 {     
            
                 $("#idAmbito4").load('../controller/item_controller.php?idAmbito='+idAmbito);
             
                 }

          
     } 
     
     
     function procesarItem(iditem,nombreitem){
     //alert(nombreitem);
       var nombrediv='#div'+iditem; 
         
   //document.getElementById('ruta').innerHTML =  document.getElementById('ruta').innerHTML + "/"+ "<a href=# onclick= numbers.forEach(myFunction) >" +nombreitem +  "</a>" ;
    
      $(nombrediv).load('../controller/item_controller.php?iditem='+iditem);  
     
     
    }
    
    
    
 
    
 function procesarIndicador(idindicador,nombreindicador)  {
    //alert(nombreindicador);
    // document.getElementById('ruta').innerHTML=  document.getElementById('ruta').innerHTML + "/"+ "<a href=#>"+  nombreindicador+"</a>" ;
          
     var nombrediv= idindicador;   
    $(nombrediv).load('../views/pregunta_view.php?idindicador='+idindicador);  

    $("#columnader").load('../views/pregunta_view.php?idindicador='+idindicador);
         
     //$("#columnader").load("../views/pregunta_view.php"); 
           
   
    }
    

   

   
</script>
<?php
//session_start();
$titulo_pagina = "Sistema.... - Pagina Principal";
include(dirname(dirname(__FILE__))."/util/Seguridad.php");
include(dirname(dirname(__FILE__))."/util/config.php");
include(dirname(dirname(__FILE__))."/includes/header.php");
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
