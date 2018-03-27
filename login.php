<form role="form" action="<?php echo $path?>/controller/UsuarioController.php" method="post">
	<div id="loginForm">
		<div class="form-group">
	    	<label for="txtUsuario">Usuario:</label>
	    	<input type="text" class="form-control" id="txtUsuario" name="txtUsuario">
		</div>
  		<div class="form-group">
		    <label for="txtPassword">Password:</label>
		    <input type="password" class="form-control" id="txtPassword" name="txtPassword">
  		</div>
	  	<button type="submit" class="btn btn-default">Ingresar</button>
		<input type="hidden" name="accion" value="login" />
  	</div>
</form>