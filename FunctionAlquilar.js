var FormAlq = document.getElementById('Alquilar');

FormEdit.addEventListener('submit', function(e){
    e.preventDefault();
    
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var departamento = document.getElementById('departamento').value;

    var ruta ="nombre="+nombre+"&apellido="+apellido+"&departamento="+departamento;

    $.ajax({
        type: "POST",
        url: 'functionAlquilar.php',
        data: ruta,
        success: function(response){
            window.alert("Departamento alquilado");
        }
    });

    return false;
   
});