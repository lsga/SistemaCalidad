function abrirPagina(url, nombre)
{
    window.open(url, nombre, 
         'top=350, left=450, width=800px, height=300px, location=0, menubar=0, status=1, toolbar=0, menubar=0, scrollbars=0, resizable=yes').focus();
}


// <summary>
/// Validamos el número de enteros y decimales
/// </summary>
/// <param name="e">Evneto</param>
/// <param name="objeto">Elemento que lanza el método</param>
/// <param name="decimals">Número de decimales permitidos</param>
function validarDecimales(e, objeto, decimals) {
    //tecla = (document.all)?e.keyCode:e.which;
    key = e.keyCode ? e.keyCode : e.which;
    // backspace, tab, delete o punto  continua 
    if (key == 8 || key == 9 || key == 0 || key == 44 || key == 46 || key == 123 || key == 39 || key == 37 ) return true;
    //si es digito valido  0-9
    if (key > 47 && key < 58) {        
        if (objeto.value == "") return true;
//            regexp = /[0-9][\.]?[0-9]{2}$/;
//             var regexp=/^[0-9]+\.?[0-9](2)$/;
//             alert(!(regexp.test(valor.value)));
//        return !(regexp.test(valor.value));
        return true;
    }
    else return false;
  

//patron = /([0-9\.])/;
//te = String.fromCharCode(tecla);
//return patron.test(te);


    return true;
}


// <summary>
/// Validamos el número de enteros y decimales
/// </summary>
/// <param name="e">Evneto</param>
/// <param name="objeto">Elemento que lanza el método</param>
/// <param name="decimals">Número de decimales permitidos</param>
function validarNumerosDecimales(e, objeto, decimals) {
    //tecla = (document.all)?e.keyCode:e.which;
    key = e.keyCode ? e.keyCode : e.which;
    var str = objeto.value;
    if((str.split(".").length-1 > 0 || decimals == 0 ) && key == 46) return false;
    // backspace, tab ,delete o punto  continua 
    if (key == 8 || key == 9 ||  key == 0 || key == 46 || key == 123 || key == 39 || key == 37 ) return true;
    //si es digito valido  0-9
    if (key > 47 && key < 58) {        
        if (objeto.value == "") return true;
//            regexp = /[0-9][\.]?[0-9]{2}$/;
//             var regexp=/^[0-9]+\.?[0-9](2)$/;
//             alert(!(regexp.test(valor.value)));
//        return !(regexp.test(valor.value));
        return true;
    }
    else return false;
  

//patron = /([0-9\.])/;
//te = String.fromCharCode(tecla);
//return patron.test(te);


    return true;
}
