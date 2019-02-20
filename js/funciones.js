function getInfo(info,infocompar,cuadrante) {
    //alert(cuadrante);
    if(cuadrante==1){
        document.getElementById("InfoCelc1").innerHTML = info;
        var peka = document.getElementById("InfoCelComparc"+cuadrante).getAttribute("class");
    }else if(cuadrante==2){
        document.getElementById("InfoCelc2").innerHTML = info;
        var peka = document.getElementById("InfoCelComparc"+cuadrante).getAttribute("class");
    }else if(cuadrante==3){
        document.getElementById("InfoCelc3").innerHTML = info;
        var peka = document.getElementById("InfoCelComparc"+cuadrante).getAttribute("class");
    }else if(cuadrante==4){
        document.getElementById("InfoCelc4").innerHTML = info;
        var peka = document.getElementById("InfoCelComparc"+cuadrante).getAttribute("class");
    }
 
  
  var response = consultaBD(peka,infocompar,cuadrante);
  
  //document.getElementById("InfoCelCompar").innerHTML=infocompar;
}
function consultaBD(dato,indice,cuadran) {
    $.ajax({
        type: 'POST',
        url:  'php/consultaBD.php',
        data: {
          clave: dato,
        },
        success: function(data) {
          document.getElementById('div1').style.backgroundImage = "url('Imagenes/iphonecarac2.jpg')";
             var oj= JSON.parse(data);
             if (indice==1) {
                 document.getElementById("InfoCelComparc"+cuadran).innerHTML = oj.Camara;
             }else if (indice==2) {
                document.getElementById("InfoCelComparc"+cuadran).innerHTML = oj.Memoria_Ram;
             }else if (indice==3) {
                document.getElementById("InfoCelComparc"+cuadran).innerHTML = oj.Descripcion;
             }else if (indice==4){
                document.getElementById("InfoCelComparc"+cuadran).innerHTML = oj.SistemaOperativo;
             }else if (indice==5){
                document.getElementById("InfoCelComparc"+cuadran).innerHTML = oj.Extras;
             }
            
        },
        error: function() {
          $("#div1").html("Error");
        }
      });
}
$(document).ready(function(){
    rotarInfo();
    Bcancelar();
    /* mientras el mouse se mueve*/
    var lap;                   /*variable que guarda la funcion y el tiempo*/
   $("body").mousemove(function(event){
            salvaPantalla();
    
  });

    
    function rotarInfo(){
        var xfinal=0,yfinal=0,xinicial=0,yinicial=0;
        $(".informacionC3").mousedown(function(event){
            xinicial = event.pageX;
            yinicial = event.pageY;
           // alert(xinicial+"---"+yinicial);
    });
        
        $(".informacionC3").mouseup(function(event){
            xfinal=event.pageX;
            yfinal=event.pageY;
            
                 });
        $(".C1infocuadrante1").mouseup(function(event){
             if(yinicial<=yfinal){
               // alert("y subio");
                $(".C1infocuadrante1").css("transform","rotate(180deg)");
                
                }else{
                //alert("y bajo");
                     $(".C1infocuadrante1").css("transform","rotate(0deg)");
                

                }
            });
         $(".C2infocuadrante1").mouseup(function(event){
             if(yinicial<=yfinal){
               // alert("y subio");
                $(".C2infocuadrante1").css("transform","rotate(180deg)");
                
                }else{
                //alert("y bajo");
                $(".C2infocuadrante1").css("transform","rotate(0deg)");

                }
            });
        
        $(".C1infocuadrante2").mouseup(function(event){
             if(yinicial<=yfinal){
               // alert("y subio");
                $(".C1infocuadrante2").css("transform","rotate(180deg)");
                
                }else{
                //alert("y bajo");
                $(".C1infocuadrante2").css("transform","rotate(0deg)");

                }
            });
         $(".C2infocuadrante2").mouseup(function(event){
             if(yinicial<=yfinal){
               // alert("y subio");
                $(".C2infocuadrante2").css("transform","rotate(180deg)");
                
                }else{
                //alert("y bajo");
                $(".C2infocuadrante2").css("transform","rotate(0deg)");

                }
            });
        
        $(".C1infocuadrante3").mouseup(function(event){
             if(yinicial<=yfinal){
               // alert("y subio");
                $(".C1infocuadrante3").css("transform","rotate(0deg)");
                
                }else{
                //alert("y bajo");
                $(".C1infocuadrante3").css("transform","rotate(180deg)");

                }
            });
         $(".C2infocuadrante3").mouseup(function(event){
             if(yinicial<=yfinal){
               // alert("y subio");
                $(".C2infocuadrante3").css("transform","rotate(0deg)");
                
                }else{
                //alert("y bajo");
                $(".C2infocuadrante3").css("transform","rotate(180deg)");

                }
            });
        
        
        $(".C1infocuadrante4").mouseup(function(event){
             if(yinicial<=yfinal){
               // alert("y subio");
                $(".C1infocuadrante4").css("transform","rotate(0deg)");
                
                }else{
                //alert("y bajo");
                $(".C1infocuadrante4").css("transform","rotate(180deg)");

                }
            });
         $(".C2infocuadrante4").mouseup(function(event){
             if(yinicial<=yfinal){
               // alert("y subio");
                $(".C2infocuadrante4").css("transform","rotate(0deg)");
                
                }else{
                //alert("y bajo");
                $(".C2infocuadrante4").css("transform","rotate(180deg)");

                }
            });
       }
     
    function Bcancelar(){
        $("#cancel").click(function(){
             $("#informacionC3").hide();
            $("#cancel").hide();
        })
    }
    //funcion para obtener coordenadas 
    /*co();
    function co(){
        $(document).mousemove(function(event){
    $("span").text(event.pageX + ", " + event.pageY);
      
  });
       
    }*/
    
     
    function salvaPantalla(){
        clearTimeout(lap);    /*cada vez que se mueve el mouse,evita que lap se ejecute*/
        $("#salvapantallas").hide();

       
  lap=setTimeout("$('#salvapantallas').show();", 5000);  /*cuando ya no se mueve el mouse despues de el tiempo ,de ejecuta esta linea,els segunto parametro el el tiempo 1s=1000*/
        
    }
    
    
    
    
});