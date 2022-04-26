var FormEdit = document.getElementById('Editar');

FormEdit.addEventListener('submit', function(e){
    e.preventDefault();
    
    var id = document.getElementById('IDENTIFICAR').value;
    var nombre = document.getElementById('nombreE').value;
    var ubicacion = document.getElementById('ubicacionE').value;
    var ambientes = document.getElementById('ambientesE').value;
    var precio = document.getElementById('precioE').value;

    var ruta ="nombre="+nombre+"&ubicacion="+ubicacion+"&ambientes="+ambientes+"&precio="+precio+"&id="+id;

    console.log(id)
    
    $.ajax({
        type: "POST",
        url: 'GuardarDatos.php',
        data: ruta,
        success: function(response){
            window.alert("Modificado con Exito");
        }
    });

    return false;
   
});