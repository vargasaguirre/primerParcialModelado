

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
    
alert(dato);
    if(dato == 0){
    document.getElementById('div1').style.backgroundImage = "url('Imagenes/iphonecarac.jpg')";
  }
  }
     