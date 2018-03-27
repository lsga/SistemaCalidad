<?php
//session_start();
$titulo_pagina = "Sistema.... - Pagina Principal";
include(dirname(dirname(__FILE__))."/util/Seguridad.php");
include(dirname(dirname(__FILE__))."/util/config.php");
include(dirname(dirname(__FILE__))."/includes/headerprincipal.php");
?>



<?php if(isset($_SESSION["sesion"])){ ?>
<div id="principal">
	  	<?php //include(dirname(__FILE__)."/infoUsuario.php")?>
</div>
<?php }else{
            echo '<div id="columnader" ></div>';
	header("Location: ../error.php/?codigo=1");
}
?>
