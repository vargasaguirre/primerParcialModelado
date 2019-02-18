

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
        $("#aid").empty();
        var txt1="<input id='n' value="+dato+">";
        $("#aid").append(txt1);
 
    
    if(dato >= 0){
      
      $.ajax({
        type: 'POST',
        url:  'php/consultaBD.php',
        data: {
          clave: dato,
        },
        success: function(data) {
          //document.getElementById('div1').style.backgroundImage = "url('Imagenes/iphonecarac2.jpg')";
            
        //  $("#InfoCel2").html(data);
          // alert(data);
        },
        error: function() {
          $("#div1").html("Error");
        }
      });
    }
  }
     