var valt = "";

$(document).ready(function(){
   
  
    
    $('#bcamara').on('click', function(){
        obtenerValor();
        var error ="error";
      // alert(valt);
        $.post('consultarBD.php',{
            idCelular : valt
        }, function(valor){
            if(valor != ""){
        //        alert(valor);
                var oj= JSON.parse(valor);
                console.log(oj.idCelular);
           document.getElementById("InfoCel2").innerHTML = oj.Camara;
            /*$('#dato1').html(oj.nombre);
            $('#dato2').html(oj.apellidos);
            $('#dato3').html(oj.direccion);
            $('#dato4').html(oj.ciudad);
            $('#dato5').html(oj.codigo_postal);*/
                
            }else{
                alert("error");
                valor = "";
                
            }
        })
       // alert(valt);
    });
    $('#bram').on('click', function(){
        obtenerValor();
        var error ="error";
       //alert(valt);
        $.post('consultarBD.php',{
            idCelular : valt
        }, function(valor){
            if(valor != ""){
            //    alert(valor);
                var oj= JSON.parse(valor);
                console.log(oj.idCelular);
           document.getElementById("InfoCel2").innerHTML = oj.Memoria_Ram;
            /*$('#dato1').html(oj.nombre);
            $('#dato2').html(oj.apellidos);
            $('#dato3').html(oj.direccion);
            $('#dato4').html(oj.ciudad);
            $('#dato5').html(oj.codigo_postal);*/
                
            }else{
                alert("error");
                valor = "";
                
            }
        })
       // alert(valt);
    });
    $('#bdescripcion').on('click', function(){
        obtenerValor();
        var error ="error";
     //  alert(valt);
        $.post('consultarBD.php',{
            idCelular : valt
        }, function(valor){
            if(valor != ""){
           //     alert(valor);
                var oj= JSON.parse(valor);
                console.log(oj.idCelular);
           document.getElementById("InfoCel2").innerHTML = oj.Descripcion;
            /*$('#dato1').html(oj.nombre);
            $('#dato2').html(oj.apellidos);
            $('#dato3').html(oj.direccion);
            $('#dato4').html(oj.ciudad);
            $('#dato5').html(oj.codigo_postal);*/
                
            }else{
                alert("error");
                valor = "";
                
            }
        })
       // alert(valt);
    });
    $('#bsistema').on('click', function(){
        obtenerValor();
        var error ="error";
     //  alert(valt);
        $.post('consultarBD.php',{
            idCelular : valt
        }, function(valor){
            if(valor != ""){
             //   alert(valor);
                var oj= JSON.parse(valor);
                console.log(oj.idCelular);
           document.getElementById("InfoCel2").innerHTML = oj.SistemaOperativo;
            /*$('#dato1').html(oj.nombre);
            $('#dato2').html(oj.apellidos);
            $('#dato3').html(oj.direccion);
            $('#dato4').html(oj.ciudad);
            $('#dato5').html(oj.codigo_postal);*/
                
            }else{
                alert("error");
                valor = "";
                
            }
        })
       // alert(valt);
    });
    $('#bextras').on('click', function(){
        obtenerValor();
        var error ="error";
     //  alert(valt);
        $.post('consultarBD.php',{
            idCelular : valt
        }, function(valor){
            if(valor != ""){
          //      alert(valor);
                var oj= JSON.parse(valor);
                console.log(oj.idCelular);
           document.getElementById("InfoCel2").innerHTML = oj.Extras;
            /*$('#dato1').html(oj.nombre);
            $('#dato2').html(oj.apellidos);
            $('#dato3').html(oj.direccion);
            $('#dato4').html(oj.ciudad);
            $('#dato5').html(oj.codigo_postal);*/
                
            }else{
                alert("error");
                valor = "";
                
            }
        })
       // alert(valt);
    });
});
function obtenerValor(){
    valt = $('#n').val();
    
}
