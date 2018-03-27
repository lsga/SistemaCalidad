<?php

class proyecto{
    
    public $db;
    
    public function __construct(PDO $db) {
        $this->db = $db;
    }    
          
        
public function getProyecto ($codigo)
        {

                 $sql = " select 
                                        p.pry_id,
                                        p.pry_nombre, 
                                        p.pry_num_requerimiento,
                                        p.pry_fecha_requerimiento,
                                        p.pry_contruccion,
                                        p.pry_area_contruccion,
                                        p.pry_nombre,
                                        p.cod_zona,
                                        p.cod_ofi,
                                        p.entireq_cod,
                                        p.pry_ofi_pdf,
                                        p.codigo_loc,
                                        p.prv_cod,
                                        p.can_cod,
                                        e.entireq_descripcion
                                        from distritos.sig_proyecto p inner join  distritos.sig_entidad_requiriente e on p.entireq_cod = e.entireq_cod";


                 if($codigo > 0)
                         $sql .= " where pry_id = ".$codigo;

                        $sql .= " order by pry_nombre ";
                  // echo $sql.'<br>';
                  $q = $this->db->prepare($sql);


                  $res = $q->execute();
                  $result = $q->fetchAll();
                  return $result;

        }
             
            
            
     
}    
            
   
  

  
   ?>
