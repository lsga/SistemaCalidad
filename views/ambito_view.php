

<html>
  
<!--
<link href="../css2/bootstrap.min.css"  rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/bootstrap.min.js"    ></script>
<script type="text/javascript" src="../js/jquery/jquery-3.1.1.min.js"    ></script>
-->

<script type="text/javascript">
   
        function mostrar_resumen(idambito){
         // alert(idambito);
         $("#idambito").load('../views/resumenAutoevaluacion.php?idambito='+idambito);
       
        
        
     } 
     
     
     </script>      

<?php

require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';

$tabla1 ='';

//print_r($datos1);
foreach ($datos1 as $key => $value) {
 $tabla1 .= "   <tr>
           
                 <td>".$datos1[$key]['ID_AMBITO']."</td>
                 <td>".$datos1[$key]['NOMBREAMBITO']."</td>
                </td>
            </tr> ";
           
 
}


require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';

?>   
     
<div id="OrderPackages">
    <table id="tableSearchResults" class="table table-hover  table-striped table-condensed">
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>
            
            <tr id="package1" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".packageDetails1">
           
                <th onclick="mostrar_resumen(1)" ><?php //echo $datos1[0]['NOMBREAMBITO'];?>  </th> 
                <th></th>
              
            </tr>
            <tr>
                <td colspan="3" class="hiddenRow">
                    <div class="accordion-body collapse packageDetails1" id="accordion1" >
                        <table>
                            <tr>
                                
                            <div id="idResumen1"> </div> 
                         
                          
                            </tr>
                        </table>
                    </div>
                </td>
                
            </tr>
            
           <tr id="package2" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".packageDetails2">
                <th onclick="mostrar_resumen(2)" ><?php echo $datos1[1]['NOMBREAMBITO'];?></th>
                <th></th>
             
               <td><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
                          
                </td>
            </tr>  
              <tr>
                <td colspan="3" class="hiddenRow">
                    <div class="accordion-body collapse packageDetails2" id="accordion2">
                        <table>
                            <tr>
                              
                            <div id="idResumen2"> </div>
                         
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            
               <tr id="package3" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".packageDetails3">
                <th  onclick="mostrar_resumen(3)"><?php echo $datos1[2]['NOMBREAMBITO'];?></th>
                <th></th>
                 <td><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
                 </td>
            </tr> 
              
              <tr>
                <td colspan="3" class="hiddenRow">
                    <div class="accordion-body collapse packageDetails3" id="accordion3">
                        <table>
                            <tr>
                               
                              <div id="idResumen3"> </div> 
                         
                        
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            
            <tr id="package4" class="accordion-toggle" data-toggle="collapse" data-parent="#OrderPackages" data-target=".packageDetails4">
                <th onclick="mostrar_resumen(4)" ><?php echo $datos1[3]['NOMBREAMBITO'];?></th>
                <th ></th>
                 <td><i class="indicator glyphicon glyphicon-chevron-up pull-right"></i>
                 </td>
            </tr> 
              
              <tr>
                <td colspan="3" class="hiddenRow">
                    <div class="accordion-body collapse packageDetails4" id="accordion4">
                        <table>
                            <tr>
                                <div id="idResumen4"> </div> 
                         
                      
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            
            
            
            
            
    
        </tbody>
    </table> 
       <div id="idambito"> </div> 
   
    
     </div>
   
</div>




</html> 
        
