

function allowDrop(ev)  {
    ev.preventDefault();

  }
  
  function drag(ev)  {
     ev.dataTransfer.setData("text", ev.target.id);
     var dato = ev.dataTransfer.getData("text");
     
  }
  
  function drop(ev)  {
    var dato = ev.dataTransfer.getData("text");
    var dato1 = ev.target.id;
     ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    
    //alert(dato);
    if(dato >= 0){
      
      $.ajax({
        type: 'POST',
        url:  'php/consultaBD.php',
        data: {
          clave: dato,
        },
        success: function(data) {
          document.getElementById('div1').style.backgroundImage = "url('Imagenes/iphonecarac2.jpg')";
             var oj= JSON.parse(data);
                //alert(oj.idCelular);
               document.getElementById("InfoCelComparc1").setAttribute("class",oj.idCelular);
            document.getElementById("InfoCelComparc2").setAttribute("class",oj.idCelular);
            document.getElementById("InfoCelComparc3").setAttribute("class",oj.idCelular);
            document.getElementById("InfoCelComparc4").setAttribute("class",oj.idCelular);
        },
        error: function() {
          $("#div1").html("Error");
        }
      });
    }
  }
     