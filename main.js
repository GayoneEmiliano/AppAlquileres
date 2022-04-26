var Form = document.getElementById('add');


Form.addEventListener('submit', function(e){
    e.preventDefault();

    var nombre = document.getElementById('nombre').value;
    var ubicacion = document.getElementById('ubicacion').value;
    var ambientes = document.getElementById('ambientes').value;
    var precio = document.getElementById('precio').value;
    
    var ruta ="nombre="+nombre+"&ubicacion="+ubicacion+"&ambientes="+ambientes+"&precio="+precio;
    
    
    $.ajax({
        type: "POST",
        url: 'functionGuardar.php',
        data: ruta,
        success: function(response){
            window.alert("Guardado con Exito");
        }
    });
    
    return false;
    
});




