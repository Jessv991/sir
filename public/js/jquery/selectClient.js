const baseUrl = window.location.origin;

$(document).on('click', '.seleccionar-cliente', function () {
    
    var isSir = '';

    if( baseUrl === 'https://api.naturaloptics.com/'){
        isSir = '/sir'
    }
    const nombre = $(this).data('nombre');
    const empresa = $(this).data('empresa');
    const axapta = $(this).data('axapta');
    const weblogin = $(this).data('weblogin');
    console.log(isSir);
    // Codificamos los valores para que sean seguros en la URL
    const url = `${isSir}/about?nombre=${encodeURIComponent(nombre)}&empresa=${encodeURIComponent(empresa)}&axapta=${encodeURIComponent(axapta)}&weblogin=${encodeURIComponent(weblogin)}`;
    console.log(url);
    window.location.href = url; // redirige a /about con parámetros
});


