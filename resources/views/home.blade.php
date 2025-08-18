@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('auth.dashboard') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
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

        <!-- Earnings (Monthly) Card Example -->
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

        <!-- Earnings (Monthly) Card Example -->
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

        <!-- Users -->
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
        </div>
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
        <div class="col-lg-12 mb-3">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 fs-4 fw-bold text-secondary">{{ __('auth.buscador_cli') }}</h6>
                </div>
                <div class="card-body">
                    <table id="datatableBuscarCliente" class="display table-responsive-xl">
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
                console.log($.fn.jquery);
                console.log($.fn.DataTable);

                this.datatableBuscarCliente =
                    $('#datatableBuscarCliente').DataTable({
                        iDisplayLength: 25,
                        processing: false,
                        autoWidth: false,
                        ajax: "{{ route('datatableBuscadorCliente') }}",
                        columns: [{
                                data: 'WEBLOGIN',
                                render: function(data, type, row) {
                                    return `<button class="w-100 btn btn-primary btn-sm" data-id="seleccionar_cliente" data-empresa="far" data-nombre="${row['NOMBRE']}" data-axapta="${row['AXAPTA']}" data-weblogin="${row['WEBLOGIN']}" >SELECCIONAR</button>`
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
                                        return `<a href="#" onclick="window.location='callto:${row['TELEFONO']}'"><i class="fas fa-phone mr-1"></i> ${row['TELEFONO']}</a>`
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
                            url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json'
                        },
                        orderCellsTop: true,
                        initComplete: function() {
                            $('#datatableBuscarCliente_filter label input').focus();
                        }
                    });
            });
        </script>
    </div>
@endsection
