


$(function () {
    $('#submit_click_categoria').click( function (event) {
        event.preventDefault();

        let id = $('#id').val();
        let categoria = $('#categoria').val();
        let categoriaIngresada = "Id: " + id + "\nCategoría: " + categoria;

        if(id <= 0 || id.trim() === ""){
            $('#valorId').text("Debes ingresar un id válido").show();
            return;
        }
        if(categoria.trim() === ""){
            $('#valorCategoria').text("Debes ingresar una categoría").show();
            return;
        }
        $('#formularioCategoria').submit();
        alert("Categoría ingresada \n\n" + categoriaIngresada);
    } )
})



$(function () {
    $('#submit_click_producto').click( function (event){
        event.preventDefault();

        let id = $('#id').val();
        let nombre = $('#nombre').val();
        let precio = $('#precio').val();
        let categoria = $('#categoria').val();
        let descripcion = $('#descripcion').val();
        let producto = "Id: " + id + "\nNombre: " + nombre + "\nPrecio: " + precio + "\nCategoría: " + categoria + "\nDescripción: " + descripcion;

        if(id <= 0 || id.trim() === ""){
            $('#valorId').text("Debes ingresar un id válido").show();
            return;
        }

        if(nombre.trim() === ""){
            $('#valorNombre').text("Debes ingresar un nombre").show();
            return;
        }

        if(precio <= 0 || precio.trim() === ""){
            $('#valorPrecio').text("Debes ingresar un precio válido").show();
            return;
        }

        if(categoria.trim() === ""){
            $('#valorCategoria').text("Debes ingresar una categoría").show();
            return;
        }

        if(descripcion.trim() === ""){
            $('#valorDescripcion').text("Debes ingresar una descripción").show();
            return;
        }

        $('#formularioProducto').submit();
        alert("Producto ingresado \n\n" + producto);
    } )
})