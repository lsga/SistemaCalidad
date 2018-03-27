<form name="frmIngresoRespuestas" action="" method="post">
    <div id='messageAT'></div>
    <table width="100%" class="TableDatos">
        <thead>  
            <tr class="fondoTextoTitulo">
            <td>Pregunta</td>
            </tr>
        </thead>
        <tbody>
            <?php echo $tablaPregunta?>
        </tbody>
    </table>
<BR>

    <table width="100%" class="TableDatos">
        <thead>  
            <tr class="fondoTextoTitulo">
                <td colspan="2">Respuesta</td>
            </tr>
        </thead>
        <tbody>
            <?php echo $tablaRespuesta?>
        </tbody>
    </table>
    <input type="button"  name="btnGuardarRespuestas" id="btnGuardarRespuestas" value="Guardar"  class="btn btn-primary"/>
</form>