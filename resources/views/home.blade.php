@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('auth.dashboard') }}</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row d-flex justify-content-end">

        <div class="col-12 col-md-8 col-lg-3 mb-5 d-flex align-items-center gap-2">

            <div class="row w-100">
                <div class="col-8 d-flex align-items-center justify-content-end">
                    <p class="mb-0 fw-bold">Filtrar por empresa:</p>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <select class="form-select" aria-label="Default select example" id="empresa">
                        <option value="nsl" {{ strtolower(Auth::user()->WORKINGCOMPANY) == 'nsl' ? 'selected' : '' }}>NSL
                        </option>
                        <option value="red" {{ strtolower(Auth::user()->WORKINGCOMPANY) == 'red' ? 'selected' : '' }}>UGO
                        </option>
                        <option value="prt" {{ strtolower(Auth::user()->WORKINGCOMPANY) == 'prt' ? 'selected' : '' }}>PRT
                        </option>
                    </select>

                </div>
            </div>
        </div>


        {{--  <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{ __('Users') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $widget['users'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <div class="row">

        {{-- <div class="col-12 col-lg-4 mb-2">
            <!-- Topbar Search -->
            <form class="form-inline mr-auto my-2 my-md-0 w-100 navbar-search">
                <div class="input-group w-100">
                    <input type="text" class="form-control bg-white border-0 small" placeholder="{{ __('auth.search') }}"
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div> --}}
        <input type="hidden" id="perfil" value="{{ Auth::user()->PBAUSERPROFILE }}">
        <input type="hidden" id="usuario" value="{{ Auth::user()->EMPLID }}">
        
        <div class="col-lg-12 mb-3">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 fs-4 fw-bold text-secondary">{{ __('auth.buscador_cli') }}</h6>
                </div>
                <div class="card-body table-responsive">
                    <table id="datatableBuscarCliente" class="display">
                        <thead>
                            <tr>
                                <th class="w-5">{{ __('auth.seleccionar') }}</th>
                                <th class="w-5">Axapta</th>
                                <th class="w-25">{{ __('auth.name') }}</th>
                                <th class="w-25">{{ __('auth.business_name') }}</th>
                                <th class="w-10">{{ __('auth.city') }}</th>
                                <th class="w-10">{{ __('auth.postal_code') }}</th>
                                <th class="w-10">{{ __('auth.telephone') }}</th>
                                <th class="w-10 text-right">{{ __('auth.group') }}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
        <script type="text/javascript">
            $(document).ready(function() {

                const screenWidth = window.innerWidth;
                var pag = 5;

                if (screenWidth < 576) {
                    pag = 2;
                } else if (screenWidth < 992) {
                    pag = 4;
                }

                const datatableBuscarCliente =
                    $('#datatableBuscarCliente').DataTable({
                        iDisplayLength: 25,
                        processing: false,
                        autoWidth: false,
                        ajax: {
                            url: "{{ route('datatableBuscadorCliente') }}",
                            type: "GET",
                            data: function(d) {
                                d.empresa = $('#empresa').val();
                                d.perfil = $('#perfil').val();
                                d.usuario = $('#usuario').val();
                            }
                        },
                        columns: [{
                                data: 'WEBLOGIN',
                                render: function(data, type, row) {
                                    return `<button class="w-100 btn btn-primary btn-sm seleccionar-cliente" data-id="seleccionar_cliente" data-empresa="far" data-nombre="${row['NOMBRE']}" data-axapta="${row['AXAPTA']}" data-weblogin="${row['WEBLOGIN']}" >SELECCIONAR</button>`
                                }
                            },
                            {
                                data: 'AXAPTA'
                            },
                            {
                                data: 'NOMBRE'
                            },
                            {
                                data: 'NOMBRECOMERCIAL'
                            },
                            {
                                data: 'CIUDAD'
                            },
                            {
                                data: 'CODIGOPOSTAL'
                            },
                            {
                                data: 'TELEFONO',
                                render: function(data, type, row) {
                                    if (`${row['TELEFONO']}`) {
                                        return `<a href="tel:${row['TELEFONO']}" onclick="window.location='callto:${row['TELEFONO']}'"><i class="fas fa-phone mr-1"></i> ${row['TELEFONO']}</a>`
                                    } else {
                                        return '';
                                    }
                                },
                                width: '13%'
                            },
                            {
                                data: 'AddressPrint',
                                className: "text-right"
                            },
                        ],
                        language: {
                            url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json',
                            paginate: {
                                previous: "<<",
                                next: ">>"
                            }
                        },
                        orderCellsTop: true,
                        pagingType: "simple_numbers", // Usa paginador con números simples
                        drawCallback: function() {
                            // Limita visualmente a 4 páginas usando jQuery
                            const maxPagesToShow = pag;
                            const $pagination = $('.dataTables_paginate .pagination');
                            const $pageButtons = $pagination.find('li:not(.previous):not(.next)');

                            if ($pageButtons.length > maxPagesToShow) {
                                $pageButtons.hide();

                                // Mostrar las primeras 4 (puedes adaptar esto para mostrar alrededor de la página actual)
                                $pageButtons.slice(0, maxPagesToShow).show();
                            }
                        },
                        initComplete: function() {
                            $('#datatableBuscarCliente_filter label input').focus();
                            // Cambiar las clases después de que se renderiza el DataTable
                            $('#datatableBuscarCliente_info')
                                .parent()
                                .removeClass('col-md-5')
                                .addClass('col-lg-5');

                            $('#datatableBuscarCliente_paginate')
                                .parent()
                                .removeClass('col-md-7')
                                .addClass('col-lg-7');

                            $('#datatableBuscarCliente_length').parent()
                                .removeClass('col-sm-12 col-md-6')
                                .addClass('col-6 d-flex align-items-end');

                            $('#datatableBuscarCliente_filter').parent()
                                .removeClass('col-sm-12 col-md-6')
                                .addClass('col-6');
                            // Reordenar el contenido del label de "Mostrar registros"
                            const $lengthLabel = $('#datatableBuscarCliente_length label');
                            const $select = $lengthLabel.find('select');

                            // Capturar el select y reconstruir el label como tú quieres
                            $lengthLabel.html('Mostrar registros: ').append($select);
                        }
                    });

                // Recargar tabla al cambiar empresa
                $('#empresa').on('change', function() {
                    datatableBuscarCliente.ajax.reload();
                });


            });
        </script>
    </div>
@endsection
