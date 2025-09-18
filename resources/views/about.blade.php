@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('auth.about') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <h2>{{ $menuCliente->NOMBRECOMERCIAL }}</h2>
                </div>

                <div class="card-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <!-- botón información general -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="InformacionCli-tab" data-bs-toggle="tab"
                                data-bs-target="#InformacionCli" type="button" role="tab">
                                {{ __('client.general_information') }}
                            </button>
                        </li>
                        <!-- botones informormes -->
                        <li class="nav-item dropdown" role="informes">
                            <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" type="button"
                                role="tab">
                                {{ __('client.reports') }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="dropdown-item" id="social_media-tab" data-bs-toggle="tab"
                                        data-bs-target="#social_media" type="button" role="tab">
                                        {{ __('client.social_media') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="online_presence-tab" data-bs-toggle="tab"
                                        data-bs-target="#online_presence" type="button" role="tab">
                                        {{ __('client.online_presence') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="fideliza_trim_analysis-tab" data-bs-toggle="tab"
                                        data-bs-target="#fideliza_trim_analysis" type="button" role="tab">
                                        {{ __('client.fideliza_trim_analysis') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="monthly_dashboards-tab" data-bs-toggle="tab"
                                        data-bs-target="#monthly_dashboards" type="button" role="tab">
                                        {{ __('client.monthly_dashboards') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="quarterly_dashboards-tab" data-bs-toggle="tab"
                                        data-bs-target="#quarterly_dashboards" type="button" role="tab">
                                        {{ __('client.quarterly_dashboards') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="annual_dashboards-tab" data-bs-toggle="tab"
                                        data-bs-target="#annual_dashboards" type="button" role="tab">
                                        {{ __('client.annual_dashboards') }}
                                    </button>
                                </li>
                            </ul>
                        </li>
                        <!-- botones cierre comercial -->
                        <li class="nav-item dropdown" role="cierre_comercial">
                            <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" type="button"
                                role="tab">
                                {{ __('client.commercial_closure') }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="dropdown-item" id="invoiced-tab" data-bs-toggle="tab"
                                        data-bs-target="#invoiced" type="button" role="tab">
                                        {{ __('client.invoiced') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="consumed-tab" data-bs-toggle="tab"
                                        data-bs-target="#consumed" type="button" role="tab">
                                        {{ __('client.consumed') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="frames_by_collection-tab" data-bs-toggle="tab"
                                        data-bs-target="#frames_by_collection" type="button" role="tab">
                                        {{ __('client.frames_by_collection') }}
                                    </button>
                                </li>
                            </ul>
                        </li>
                        <!-- botones fidelización -->
                        <li class="nav-item dropdown" role="fidelizacion">
                            <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" type="button"
                                role="tab">
                                {{ __('client.loyalty') }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="dropdown-item" id="contracts-tab" data-bs-toggle="tab"
                                        data-bs-target="#contracts" type="button" role="tab">
                                        {{ __('client.contracts') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="loyalty_plan-tab" data-bs-toggle="tab"
                                        data-bs-target="#loyalty_plan" type="button" role="tab">
                                        {{ __('client.loyalty_plan') }}
                                    </button>
                                </li>
                            </ul>
                        </li>
                        <!-- botones Administración -->
                        <li class="nav-item dropdown" role="administracion">
                            <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" type="button"
                                role="tab">
                                {{ __('client.administration') }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="dropdown-item" id="orders-tab" data-bs-toggle="tab"
                                        data-bs-target="#orders" type="button" role="tab">
                                        {{ __('client.orders') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="delivery_notes-tab" data-bs-toggle="tab"
                                        data-bs-target="#delivery_notes" type="button" role="tab">
                                        {{ __('client.delivery_notes') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="product_shipments-tab" data-bs-toggle="tab"
                                        data-bs-target="#product_shipments" type="button" role="tab">
                                        {{ __('client.product_shipments') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="invoices-tab" data-bs-toggle="tab"
                                        data-bs-target="#invoices" type="button" role="tab">
                                        {{ __('client.invoices') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="due_dates-tab" data-bs-toggle="tab"
                                        data-bs-target="#due_dates" type="button" role="tab">
                                        {{ __('client.due_dates') }}
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" id="pending_items-tab" data-bs-toggle="tab"
                                        data-bs-target="#pending_items" type="button" role="tab">
                                        {{ __('client.pending_items') }}
                                    </button>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content mt-3">
                        <!-- información general -->
                        <div class="tab-pane fade show active" id="InformacionCli" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
                                        @csrf
                                        @method('PUT')

                                        <div class="ps-lg-4 pe-lg-4">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="form-group focused">
                                                        <label class=""
                                                            for="cod_client">{{ __('client.client_code') }}</label>
                                                        <input type="text" id="cod_client" class="form-control"
                                                            name="cod_client"
                                                            placeholder="{{ __('client.client_code') }}"
                                                            value="{{ $clienteInfo->accountnum }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="nom_comercial">{{ __('client.trade_name') }}</label>
                                                        <input type="text" id="nom_comercial" class="form-control"
                                                            name="nom_comercial"
                                                            placeholder="{{ __('client.trade_name') }}"
                                                            value="{{ $menuCliente->NOMBRECOMERCIAL }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="nom_fiscal">{{ __('client.tax_name') }}</label>
                                                        <input type="text" id="nom_fiscal" class="form-control"
                                                            name="nom_fiscal" placeholder="{{ __('client.tax_name') }}"
                                                            value="{{ $menuCliente->name }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group focused">
                                                        <label class="" for="cif">NIF/CIF</label>
                                                        <input type="text" id="cif" class="form-control"
                                                            name="cif" placeholder="NIF/CIF"
                                                            value="{{ $menuCliente->vatnum }}" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-3">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="telefono">{{ __('auth.telephone') }}</label>
                                                        <div class="input-group">
                                                            <input disabled placeholder="{{ __('auth.telephone') }}"
                                                                type="tel" id="telefono" name="telefono"
                                                                class="form-control" value="{{ $menuCliente->phone }}">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary" type="button"
                                                                    onclick="window.location.href='tel:{{ $menuCliente->phone }}'">
                                                                    <i class="fas fa-phone"></i>
                                                                </button>
                                                                {{-- 
                                                                <button class="btn btn-primary" type="button"
                                                                    onclick="window.location='callto:{{ $menuCliente->phone }}'"><i
                                                                        class="fas fa-phone"></i></button>
                                                                --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase" for="email">Email</label>
                                                        <input type="email" id="email" class="form-control"
                                                            name="email" placeholder="Email"
                                                            value="{{ $menuCliente->email }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase" for="web">Web</label>
                                                        <div class="input-group">
                                                            <input disabled placeholder="Página web" type="text"
                                                                class="form-control" id="web" name="web"
                                                                value="{{ $clienteInfo->webpages }}">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary" type="button"
                                                                    onclick="window.open('{{ $clienteInfo->webpages }}', '_blank')">
                                                                    <i class="fas fa-globe"></i>
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                    $claseCss = strtoupper(
                                                        preg_replace('/[ .-]/', '', $clienteInfo->paymmode),
                                                    );
                                                @endphp
                                                <div class="col-lg-3">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="forma_pago">{{ __('client.payment') }}</label>
                                                        <input type="text" id="forma_pago"
                                                            class="form-control {{ $claseCss }}" name="forma_pago"
                                                            placeholder="{{ __('client.payment') }}"
                                                            value="{{ $clienteInfo->paymmode }}" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-4">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="email">{{ __('client.address') }}</label>
                                                        <input type="text" id="direccion" class="form-control"
                                                            name="direccion" placeholder="{{ __('client.address') }}"
                                                            value="{{ $menuCliente->street }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="ciudad">{{ __('auth.city') }}</label>
                                                        <input type="text" id="ciudad" class="form-control"
                                                            name="ciudad" placeholder="{{ __('auth.city') }}"
                                                            value="{{ $menuCliente->city }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group focused">
                                                        <div class="form-group focused">
                                                            <label class=" text-uppercase"
                                                                for="provincia">{{ __('client.province') }}</label>
                                                            <input type="text" id="provincia" class="form-control"
                                                                name="provincia"
                                                                placeholder="{{ __('client.province') }}"
                                                                value="{{ $menuCliente->county_name }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="codigo_postal">{{ __('auth.postal_code') }}</label>
                                                        <input type="text" id="codigo_postal" class="form-control"
                                                            name="codigo_postal"
                                                            placeholder="{{ __('client.postal_code') }}"
                                                            value="{{ $menuCliente->zipcode }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="codigo_postal">{{ __('client.country') }}</label>
                                                        <input type="text" id="codigo_postal" class="form-control"
                                                            name="codigo_postal"
                                                            placeholder="{{ __('client.postal_code') }}"
                                                            value="{{ $clienteInfo->country_name }}" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="sidebar-divider2">

                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-5 pb-2">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="formato_commercial">{{ __('client.commercial_format') }}</label>
                                                                <input type="text" id="formato_commercial"
                                                                    class="form-control" name="formato_commercial"
                                                                    placeholder="{{ __('client.commercial_format') }}"
                                                                    value="{{ $clienteInfo->COMNAME }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="categoria">{{ __('client.category') }}</label>
                                                                <input type="text" id="categoria" class="form-control"
                                                                    name="categoria"
                                                                    placeholder="{{ __('client.category') }}"
                                                                    value="{{ $menuCliente->NATCUSTCLASSIFICATIONID }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Gestor_personal">{{ __('client.personal_manager') }}</label>
                                                                <input type="text" id="Gestor_personal"
                                                                    class="form-control" name="Gestor_personal"
                                                                    placeholder="{{ __('client.personal_manager') }}"
                                                                    value="{{ old('Gestor_personal', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Asesor_comercial">{{ __('client.commercial_advisor') }}</label>
                                                                <input type="text" id="Asesor_comercial"
                                                                    class="form-control" name="Asesor_comercial"
                                                                    placeholder="{{ __('client.commercial_advisor') }}"
                                                                    value="{{ old('Asesor_comercial', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Producto_comercial">{{ __('client.commercial_product') }}</label>
                                                                <input type="text" id="Producto_comercial"
                                                                    class="form-control" name="Producto_comercial"
                                                                    placeholder="{{ __('client.commercial_product') }}"
                                                                    value="{{ old('Producto_comercial', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Trab">T/Trab</label>
                                                                <input type="text" id="Trab" class="form-control"
                                                                    name="Trab"
                                                                    placeholder="{{ __('client.personal_manager') }}"
                                                                    value="{{ old('Trab', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="col-lg-1 d-none d-lg-flex justify-content-center align-items-center">
                                                    <div class="vertical-line"></div>
                                                </div>

                                                <div class="col-12 d-block d-lg-none text-center">
                                                    <hr class="sidebar-divider2">
                                                </div>

                                                <div class="col-lg-5 apart_finanza pb-2">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Capacidad_anual">{{ __('client.annual_capacity') }}</label>
                                                                <input type="text" id="Capacidad_anual"
                                                                    class="form-control" name="Capacidad_anual"
                                                                    placeholder="{{ __('client.annual_capacity') }}"
                                                                    value="{{ old('Capacidad_anual', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Hasta_la_fecha">{{ __('client.to_date') }}</label>
                                                                <input type="text" id="Hasta_la_fecha"
                                                                    class="form-control" name="Hasta_la_fecha"
                                                                    placeholder="{{ __('client.to_date') }}"
                                                                    value="{{ old('Hasta_la_fecha', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=""
                                                                    for="Capacidad">{{ __('client.capacity') }}</label>
                                                                <input type="text" id="Capacidad" class="form-control"
                                                                    name="Capacidad"
                                                                    placeholder="{{ __('client.capacity') }}"
                                                                    value="{{ old('Capacidad', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Consumido">{{ __('client.consumed') }}</label>
                                                                <input type="text" id="Consumido" class="form-control"
                                                                    name="Consumido"
                                                                    placeholder="{{ __('client.consumed') }}"
                                                                    value="{{ old('Consumido', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Facturado">{{ __('client.invoiced') }}</label>
                                                                <input type="text" id="Facturado" class="form-control"
                                                                    name="Facturado"
                                                                    placeholder="{{ __('client.invoiced') }}"
                                                                    value="{{ old('Facturado', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Producto_comercial">{{ __('client.consumed_loyalty') }}</label>
                                                                <input type="text" id="Producto_comercial"
                                                                    class="form-control" name="Producto_comercial"
                                                                    placeholder="{{ __('client.consumed_loyalty') }}"
                                                                    value="{{ old('Producto_comercial', Auth::user()->NAME) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- informormes -->
                        <div class="tab-pane fade" id="social_media" role="tabpanel">
                            Contenido de "social_media"
                        </div>
                        <div class="tab-pane fade" id="online_presence" role="tabpanel">
                            Contenido de "online_presence"
                        </div>
                        <div class="tab-pane fade" id="fideliza_trim_analysis" role="tabpanel">
                            Contenido de "fideliza_trim_analysis"
                        </div>
                        <div class="tab-pane fade" id="monthly_dashboards" role="tabpanel">
                            Contenido de "monthly_dashboards"
                        </div>
                        <div class="tab-pane fade" id="quarterly_dashboards" role="tabpanel">
                            Contenido de "quarterly_dashboards"
                        </div>
                        <div class="tab-pane fade" id="annual_dashboards" role="tabpanel">
                            Contenido de "annual_dashboards"
                        </div>
                        <!-- cierre comercial -->
                        <div class="tab-pane fade" id="invoiced" role="tabpanel">
                            Contenido de "invoiced"
                        </div>
                        <div class="tab-pane fade" id="consumed" role="tabpanel">
                            Contenido de "consumed"
                        </div>
                        <div class="tab-pane fade" id="frames_by_collection" role="tabpanel">
                            Contenido de "frames_by_collection"
                        </div>
                        <!-- cierre fidelización -->
                        <div class="tab-pane fade" id="contracts" role="tabpanel">
                            Contenido de "contracts"
                        </div>
                        <div class="tab-pane fade" id="loyalty_plan" role="tabpanel">
                            Contenido de "loyalty_plan"
                        </div>
                        <!-- cierre Administración -->
                        <div class="tab-pane fade" id="orders" role="tabpanel">
                            Contenido de "orders"
                        </div>
                        <div class="tab-pane fade" id="delivery_notes" role="tabpanel">
                            Contenido de "delivery_notes"
                        </div>
                        <div class="tab-pane fade" id="product_shipments" role="tabpanel">
                            Contenido de "product_shipments"
                        </div>
                        <div class="tab-pane fade" id="invoices" role="tabpanel">
                            Contenido de "invoices"
                        </div>
                        <div class="tab-pane fade" id="due_dates" role="tabpanel">
                            Contenido de "due_dates"
                        </div>
                        <div class="tab-pane fade" id="pending_items" role="tabpanel">
                            Contenido de "pending_items"
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
