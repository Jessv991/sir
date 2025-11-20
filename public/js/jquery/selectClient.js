const BASE_URL = "<?= base_url(); ?>";

$(document).on('click', '.seleccionar-cliente', function () {
    console.log(BASE_URL);
    const nombre = $(this).data('nombre');
    const empresa = $(this).data('empresa');
    const axapta = $(this).data('axapta');
    const weblogin = $(this).data('weblogin');

    // Codificamos los valores para que sean seguros en la URL
    const url = `/sir/about?nombre=${encodeURIComponent(nombre)}&empresa=${encodeURIComponent(empresa)}&axapta=${encodeURIComponent(axapta)}&weblogin=${encodeURIComponent(weblogin)}`;

    window.location.href = url; // redirige a /about con parámetros
});


