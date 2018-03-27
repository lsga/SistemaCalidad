<html>
	<head>
             <title><?php echo $titulo_pagina; ?></title>
            <link href="<?php echo $path;?>/css/estilo.css"  rel="stylesheet" type="text/css" />
						<link href="<?php echo $path;?>/css/principal.css"  rel="stylesheet" type="text/css" />
            <link href="<?php echo $path;?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <link href="<?php echo $path;?>/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css">
			<link href="<?php echo $path;?>/css/calendario.css" type="text/css" rel="stylesheet">
           <script type="text/javascript" src="<?php echo $path;?>/js/jquery/jquery.js"    ></script>
           <!-- <script type="text/javascript" src="<?php echo $path;?>/js/jquery/jquery.min.js"></script> -->
          <!-- <script type="text/javascript" src="<?php echo $path;?>/js/jquery-ui.min.js"    ></script> -->
            <script type="text/javascript" src="<?php echo $path;?>/js/general.js"    ></script>
            <script type="text/javascript" src="<?php echo $path;?>/js/funcionesMenu.js"    ></script>
			<script src="<?php echo $path;?>/js/calendar.js" type="text/javascript"></script>
			<script src="<?php echo $path;?>/js/calendar-es.js" type="text/javascript"></script>
			<script src="<?php echo $path;?>/js/calendar-setup.js" type="text/javascript"></script>

	</head>
	<body>
		<div id="principal">
			<div id="cabeceraPrincipal">
				<div align="center" style="margin-left:-175px;">
   					<img src="<?php echo $path?>/img/csgbanner.jpg"/>
   				</div>
            </div>
            <?php
			if(isset($_SESSION["sesion"])){ ?>
                 		<div id="columnaprin">
                                  <?php include("../includes/menu_principal.php"); ?>
				</div>
			<?php } ?>
