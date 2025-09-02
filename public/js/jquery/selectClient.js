$(document).on('click', '.seleccionar-cliente', function () {
    const nombre = $(this).data('nombre');
    const empresa = $(this).data('empresa');
    const axapta = $(this).data('axapta');
    const weblogin = $(this).data('weblogin');

    // Codificamos los valores para que sean seguros en la URL
    const url = `/about?nombre=${encodeURIComponent(nombre)}&empresa=${encodeURIComponent(empresa)}&axapta=${encodeURIComponent(axapta)}&weblogin=${encodeURIComponent(weblogin)}`;

    window.location.href = url; // redirige a /about con parámetros
});


