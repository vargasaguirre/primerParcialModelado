function getInfo(info) {
  document.getElementById("InfoCel").innerHTML = info;
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
        var xfinal,yfinal,xinicial,yinicial;
        $("#informacionC3").mousedown(function(event){
            xinicial = event.pageX;
            yinicial = event.pageY;
    });
        
        $("#informacionC3").mouseup(function(event){
            xfinal=event.pageX;
            yfinal=event.pageY;
            
            if(yinicial<yfinal){
                //alert("y subio");
                $("#informacionC3").css("transform","rotate(0deg)");
                $("#cancel").css("width","10.2%");
                $("#cancel").css("left","95%");
                $("#cancel").css("top","-5%");
                }else{
                //alert("y bajo");
                $("#informacionC3").css("transform","rotate(180deg)");
                    $("#cancel").css("transform","rotate(180deg)");
                    $("#cancel").css("width","10.2%");
                $("#cancel").css("left","95%");
                $("#cancel").css("top","-5%");
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

       
  lap=setTimeout("$('#salvapantallas').show();", 60000);  /*cuando ya no se mueve el mouse despues de el tiempo ,de ejecuta esta linea,els segunto parametro el el tiempo 1s=1000*/
        
    }
    
    
    
    
});