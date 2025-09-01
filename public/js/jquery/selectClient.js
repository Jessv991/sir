$(document).on('click', '.seleccionar-cliente', function () {
    const nombre = $(this).data('nombre');
    const empresa = $(this).data('empresa');
    const axapta = $(this).data('axapta');
    const weblogin = $(this).data('weblogin');

    $('#tuModalID').modal('show');
});

