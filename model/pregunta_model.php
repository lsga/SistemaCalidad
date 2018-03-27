<?php
session_start();
class pregunta{

    public $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getFinalizarEncuesta ($idEncuesta){


           $sqlUpdate =" update encuesta
                         set estado ='terminada'
                         where id_encuesta = ".$idEncuesta." ";

                        $q = $this->db->prepare($sqlUpdate);
                        $q->execute();
                        $res = $q->fetchAll();
    }



    public function getPregunta ($codigo)
        {
                 $sql = " select
                                       p.id_pregunta,
                                       p.nombrepregunta,
                                       p.descripcionevidencia,
                                       p.evidencia,
                                       r.id_respuesta,
                                       r.descripcionrespuesta,
                                       rp.id_respuesta_pregunta,
                                       p.COMENTARIO,
                                       p.OBSERVACION

                                        from pregunta p join respuesta r on p.id_pregunta = r.id_pregunta
                                        left join respuesta_pregunta rp on rp.eliminado = 0 and  p.id_pregunta = rp.id_pregunta and r.id_respuesta = rp.id_respuesta
                                        where  p.id_pregunta =".$codigo;


                    //echo $sql.'<br>';
                  $q = $this->db->prepare($sql);


                  $res = $q->execute();
                  $result = $q->fetchAll();
                  return $result;

        }

public function getEstadoEncuesta ()
        {
    // obtengo el estado de la encuesta
    $sqlEncuesta = "select id_encuesta, DATE_FORMAT(fecha_inicio, '%Y-%m-%d') "
                 . "AS fechainicio, DATE_FORMAT(fecha_fin, '%Y-%m-%d') AS fechafin "
                 . "from encuesta WHERE id_encuesta='".$_COOKIE['id_encuesta']."'"
                 . " and NOW() BETWEEN fecha_inicio and fecha_fin";
    $q = $this->db->prepare($sqlEncuesta);
    $q->execute();
    $resultado = $q->fetchAll();

    if($resultado)
        {
            return  '';
         }
    else
        {
          return  " disabled='disabled'";
        }
        }

    public function getItem ($codigo)
        {

                 $sql = " select  ID_ITEM,NOMBREITEM from item where ID_AMBITO =".$codigo;


                  // echo $sql.'<br>';
                  $q = $this->db->prepare($sql);


                  $res = $q->execute();

                  $result = $q->fetchAll();

                  return $result;


        }

       public function getIndicador ($codigo)
        {

                 $sql = " select id_indicador,indicador_decripcion from indicadores where ID_ITEM=".$codigo;


                 // echo $sql.'<br>';
                  $q = $this->db->prepare($sql);


                  $res = $q->execute();

                  $result = $q->fetchAll();

                  return $result;


        }


       public function insertar_respuesta($pregunta,$respuesta, $txtevidencia, $fileEvidencia, $txtComentario, $txtobservaciones)
        {

           $sqlSelect = " select *"
                   . "from respuesta_pregunta "
                   . "where id_pregunta= ".$pregunta." and id_respuesta = ".$respuesta;


            $q = $this->db->prepare($sqlSelect);
            $q->execute();
            $result = $q->fetchAll();

            //echo $sqlSelect;

            if($result[0]['id_respuesta_pregunta'] > 0) {
                if($result[0]['eliminado'] == 1){


                        $sqlUpdate =" update respuesta_pregunta set eliminado =1  where id_pregunta= ".$pregunta." and id_respuesta <> ".$respuesta." ;
                                update respuesta_pregunta set eliminado =0 where id_pregunta= ".$pregunta." and id_respuesta = ".$respuesta. "";

                        //echo $sqlUpdate;
                        $q = $this->db->prepare($sqlUpdate);
                        $q->execute();
                        $res = $q->fetchAll();
                    }
                }  else {

                  $sql = " update respuesta_pregunta set eliminado =1  where id_pregunta= ".$pregunta." and id_respuesta <> ".$respuesta." and id_encuesta= ".$_COOKIE['id_encuesta'].";
                      INSERT  INTO respuesta_pregunta(
                    id_pregunta,
                    id_respuesta,
                    id_encuesta) values ('".$pregunta."','".$respuesta."','".$_COOKIE['id_encuesta']."' ) ";

                //  echo $sql;

                $q = $this->db->prepare($sql);
                $q->execute();
                $res = $q->fetchAll();



            }
           $dataFile = "&";
           // para archivo de escritura
           if (file_exists($fileEvidencia['tmp_name'])) {
                $escrituraspdf =  "files/".'evidencia_'.$pregunta.'.pdf';
                $dataFile .="1&";
                copy( $fileEvidencia['tmp_name'], "../files/evidencia_".$pregunta.'.pdf');
            } else $dataFile .="0&";


            $sqlEvidencia = "UPDATE pregunta set descripcionevidencia='".$txtevidencia."', comentario='".$txtComentario."', observacion='".$txtobservaciones."'";
            if ($escrituraspdf != '')
                $sqlEvidencia .=", evidencia= '".$escrituraspdf."'";

            $sqlEvidencia .=" where id_pregunta= '".$pregunta."' ";


              //echo $sqlEvidencia;


            $q = $this->db->prepare($sqlEvidencia);
            $q->execute();
            $res = $q->fetchAll();




          }

            public function insertar_evidencia($evidencia,$pregunta,$fileEscritura)
        {

                  $sql = "UPDATE pregunta set descripcionevidencia= '".$evidencia."' where id_pregunta= '".$pregunta."' ";


                   if (file_exists($fileEscritura['tmp_name'])) {
                $escrituraspdf =  "files/".'escritura_'.$data["txtpred_id"].'.pdf';
                $sql .= ", evidencia = '".$escrituraspdf."'";
                $dataFile .="1&";
                copy( $fileEscritura['tmp_name'], "../files/escritura_".$data["txtpred_id"].'.pdf');
            } else $dataFile .="0&";



            $q = $this->db->prepare($sql);
            $q->execute();
            $res = $q->fetchAll();




          }


        public function resumenEvaluacion(){
                 $sql = " select p.id_pregunta,"
                         . " i.id_indicador,"
                         . " p.nombrepregunta,"
                         . " p.descripcionevidencia,"
                         . " p.evidencia,"
                         . " r.id_respuesta,"
                         . " r.descripcionrespuesta,"
                         . " rp.id_respuesta_pregunta,"
                         . " p.evidencia,"
                         . " p.descripcionevidencia,"
                         . " r.ponderacion_respuesta,"
                         . " i.indicador_decripcion, "
                         . " p.observacion, "
                         . " p.comentario "

                         . " from pregunta p join respuesta r on p.id_pregunta = r.id_pregunta inner join "
                         . "respuesta_pregunta rp on rp.eliminado = 0 "
                         . "and p.id_pregunta = rp.id_pregunta"
                         . " and r.id_respuesta = rp.id_respuesta join indicadores i on "
                         . "r.id_indicador= i.id_indicador join encuesta e on rp.id_encuesta = e.id_encuesta"
                         . " where 1=1 and e.id_encuesta='".$_COOKIE['id_encuesta']."'"." ORDER BY p.id_pregunta";


                   //echo $sql.'<br>';
                  $q = $this->db->prepare($sql);


                  $res = $q->execute();
                  $result = $q->fetchAll();
                  return $result;
        }

        public function Items(){

              $sql = " select * from item";


                  //echo $sql.'<br>';
                 $q = $this->db->prepare($sql);


                 $res = $q->execute();
                 $result = $q->fetchAll();
                 return $result;

       }

         public function getAmbito(){

               $sql = " select * from ambito";


                   //echo $sql.'<br>';
                  $q = $this->db->prepare($sql);


                  $res = $q->execute();
                  $result = $q->fetchAll();
                  return $result;

        }



        public function getEncuesta(){

               $sql = " select * from encuesta";


                   //echo $sql.'<br>';
                  $q = $this->db->prepare($sql);


                  $res = $q->execute();
                  $result = $q->fetchAll();
                  return $result;

        }

        public function getComponente(){

              $sql = " select * from componente";


                  //echo $sql.'<br>';
                 $q = $this->db->prepare($sql);


                 $res = $q->execute();
                 $result = $q->fetchAll();
                 return $result;

       }

       public function getProceso ($codigo)
           {

                    $sql = " select  idProceso,nombreProceso from proceso where idComponente =".$codigo;


                     // echo $sql.'<br>';
                     $q = $this->db->prepare($sql);


                     $res = $q->execute();

                     $result = $q->fetchAll();

                     return $result;


           }

          public function getElemento ($codigo)
           {

                    $sql = " select idElemento,nombreElemento from elemento where idProceso=".$codigo;


                    // echo $sql.'<br>';
                     $q = $this->db->prepare($sql);


                     $res = $q->execute();

                     $result = $q->fetchAll();

                     return $result;


           }

           public function getIndicadorMinisterio ($codigo)
            {

                     $sql = " select idIndicadorME,codigoME from indicadoresme where idElemento=".$codigo;


                     // echo $sql.'<br>';
                      $q = $this->db->prepare($sql);


                      $res = $q->execute();

                      $result = $q->fetchAll();

                      return $result;


            }

           public function Procesos(){

                 $sql = " select * from proceso";


                     //echo $sql.'<br>';
                    $q = $this->db->prepare($sql);


                    $res = $q->execute();
                    $result = $q->fetchAll();
                    return $result;

          }

          public function getPreguntaMinisterio ($codigo)
              {
                       $sql = " select
                                             i.idIndicadorME,
                                             i.descripcionIndicadorME,
                                             i.descripcionevidencia,
                                             i.evidencia,
                                             rme.idRespuestaME,
                                             rme.descripcionRespuestaME,
                                             ri.idRespuestaIndicador,
                                             i.COMENTARIO,
                                             i.OBSERVACION

                                              from indicadoresme i join respuestame rme on i.idIndicadorME = rme.idIndicadorME
                                              left join respuesta_indicador ri on ri.eliminado = 0 and  i.idIndicadorME = ri.idIndicadorME and rme.idRespuestaME = ri.idRespuestaME
                                              where  i.idIndicadorME =".$codigo;


                          //echo $sql.'<br>';
                        $q = $this->db->prepare($sql);


                        $res = $q->execute();
                        $result = $q->fetchAll();
                        return $result;

              }




       }









   ?>
