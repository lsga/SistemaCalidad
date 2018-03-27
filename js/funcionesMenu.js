/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){
      $("#ingreso_proyecto").click(function(){
            $("#columnader").load("m.principal.php"); 
            
      });
      
      
      
      
       $("#ver_proyecto").click(function(){
          
            $("#columnader").load("resumenAutoevaluacion.php"); 
          
      });
      
      
       $("#res_final").click(function(){
          
            $("#columnader").load("prueba2.php"); 
          
      });
      
      
      
      
      
      
      
      
       $("#ver_predios").click(function(){
          
            $("#columnader").load("predios.php"); 
          
      });
    
      
    });
    
    function buscar (codigo)
    {
          
            $("#columnader").load("proyecto.php?id="+codigo); 
          
    }
    function Ver (codigo)
    {
          
            $("#columnader").load("m.principal.php?id="+codigo); 
          
    }
    
    function buscarPredios (cod_proyecto)
    {
          
            $("#columnader").load("buscarPredios.php?id="+cod_proyecto); 
          
    }
    
    function verPredio (cod_predio, proyecto)
    {
            $("#columnader").load("editarPredio.php?id="+cod_predio+"&proyecto="+proyecto); 
          
    }
    
    function nuevoPropietario (cod_predio, cod_propietario, proyecto)
    {
            $("#columnader").load("form_predio_propietario_nuevo.php?id_predio="+cod_predio+'&id_propietario='+cod_propietario+"&proyecto="+proyecto); 
          
    }