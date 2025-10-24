@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('auth.about') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-10 w-100">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <h2>{{ $clienteInfo->NOMBRECOMERCIAL }}</h2>
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
                        <!-- botón servicios -->
                        <li class="nav-item" role="servicios">
                            <button class="nav-link" id="servicios-tab" data-bs-toggle="tab" data-bs-target="#servicios"
                                type="button" role="tab">
                                {{ __('client.services') }}
                            </button>
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
                                                            value="{{ trim($clienteInfo->accountnum) }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="nom_comercial">{{ __('client.trade_name') }}</label>
                                                        <input type="text" id="nom_comercial" class="form-control"
                                                            name="nom_comercial"
                                                            placeholder="{{ __('client.trade_name') }}"
                                                            value="{{ trim($clienteInfo->NOMBRECOMERCIAL) }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="nom_fiscal">{{ __('client.tax_name') }}</label>
                                                        <input type="text" id="nom_fiscal" class="form-control"
                                                            name="nom_fiscal" placeholder="{{ __('client.tax_name') }}"
                                                            value="{{ trim($clienteInfo->name) }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group focused">
                                                        <label class="" for="cif">NIF/CIF</label>
                                                        <input type="text" id="cif" class="form-control"
                                                            name="cif" placeholder="NIF/CIF"
                                                            value="{{ trim($clienteInfo->vatnum) }}" disabled>
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
                                                                class="form-control"
                                                                value="{{ trim($clienteInfo->phone) }}">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary" type="button"
                                                                    onclick="window.location.href='tel:{{ trim($clienteInfo->phone) }}'">
                                                                    <i class="fas fa-phone"></i>
                                                                </button>
                                                                {{-- 
                                                                <button class="btn btn-primary" type="button"
                                                                    onclick="window.location='callto:{{ $clienteInfo->phone }}'"><i
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
                                                            value="{{ trim($clienteInfo->email) }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase" for="web">Web</label>
                                                        <div class="input-group">
                                                            <input disabled placeholder="Página web" type="text"
                                                                class="form-control" id="web" name="web"
                                                                value="{{ trim($clienteInfo->webpages) }}">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary" type="button"
                                                                    onclick="window.open('{{ trim($clienteInfo->webpages) }}', '_blank')">
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
                                                            value="{{ trim($clienteInfo->paymmode) }}" disabled>
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
                                                            value="{{ trim($clienteInfo->street) }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="ciudad">{{ __('auth.city') }}</label>
                                                        <input type="text" id="ciudad" class="form-control"
                                                            name="ciudad" placeholder="{{ __('auth.city') }}"
                                                            value="{{ trim($clienteInfo->city) }}" disabled>
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
                                                                value="{{ trim($clienteInfo->county_name) }}" disabled>
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
                                                            value="{{ trim($clienteInfo->zipcode) }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group focused">
                                                        <label class=" text-uppercase"
                                                            for="codigo_postal">{{ __('client.country') }}</label>
                                                        <input type="text" id="codigo_postal" class="form-control"
                                                            name="codigo_postal"
                                                            placeholder="{{ __('client.postal_code') }}"
                                                            value="{{ trim($clienteInfo->country_name) }}" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="sidebar-divider2">

                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-5 pb-2 ab_form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="formato_commercial">{{ __('client.commercial_format') }}</label>
                                                                <input type="text" id="formato_commercial"
                                                                    class="form-control" name="formato_commercial"
                                                                    placeholder="{{ __('client.commercial_format') }}"
                                                                    value="{{ trim($clienteInfo->COMNAME) }}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="categoria">{{ __('client.category') }}</label>
                                                                <input type="text" id="categoria" class="form-control"
                                                                    name="categoria"
                                                                    placeholder="{{ __('client.category') }}"
                                                                    value="{{ trim($clienteInfo->NATCUSTCLASSIFICATIONID) }}"
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
                                                                    value="{{ trim($gestores['EmplGestor']) }} - {{ trim($gestores['EmplGestorName']) }}"
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
                                                                    value="{{ trim($gestores['EmplComercial']) }} - {{ trim($gestores['EmplComercialName']) }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @php
                                                        $empProd = trim($gestores['EmpProdName'] ?? '');
                                                        $emplProd = trim($gestores['EmplProdName'] ?? '');
                                                        $productoComercial = trim(
                                                            $empProd . ($empProd && $emplProd ? ' - ' : '') . $emplProd,
                                                        );
                                                    @endphp

                                                    <div class="row mt-3">
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Producto_comercial">{{ __('client.commercial_product') }}</label>
                                                                <input type="text" id="Producto_comercial"
                                                                    class="form-control" name="Producto_comercial"
                                                                    placeholder="{{ __('client.commercial_product') }}"
                                                                    value="{{ $productoComercial }}" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Trab">T/Trab</label>
                                                                <input type="text" id="Trab" class="form-control"
                                                                    name="Trab"
                                                                    placeholder="{{ __('client.personal_manager') }}"
                                                                    value="{{ number_format($gestores['Tiendas'], 0, ',', '') }}/{{ number_format($gestores['Empleados'], 1, '.', '') }}"
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

                                                <div class="col-lg-5 apart_finanza ab_form pb-2">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Capacidad_anual">{{ __('client.annual_capacity') }}</label>
                                                                <input type="text" id="Capacidad_anual"
                                                                    class="form-control" name="Capacidad_anual"
                                                                    placeholder="{{ __('client.annual_capacity') }}"
                                                                    value="{{ number_format($potencialAnual, 2, ',', '.') }}"
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
                                                                    value="{{ $mes_cierre }}" disabled>
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
                                                                    value="{{ number_format($capacidades['totalCapacidad'], 2, ',', '.') }} €"
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
                                                                    value="{{ number_format($capacidades['totalConsumido'], 2, ',', '.') }} €"
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
                                                                    value="{{ number_format($capacidades['totalFacturado'], 2, ',', '.') }} €"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $fidelidad = '';
                                                            if (
                                                                !empty($capacidades['totalCapacidad']) &&
                                                                $capacidades['totalCapacidad'] != 0
                                                            ) {
                                                                $consumo = number_format(
                                                                    ($capacidades['totalConsumido'] /
                                                                        $capacidades['totalCapacidad']) *
                                                                        100,
                                                                    2,
                                                                    ',',
                                                                    '.',
                                                                );
                                                            } else {
                                                                $consumo = 0;
                                                            }
                                                        @endphp


                                                        @if ($consumo > 50)
                                                            @php $fidelidad = 'REEMBOLSO'; @endphp
                                                        @endif

                                                        <div class="col-lg-6">
                                                            <div class="form-group focused">
                                                                <label class=" text-uppercase"
                                                                    for="Producto_comercial">{{ __('client.consumed_loyalty') }}</label>
                                                                <input type="text" id="Producto_comercial"
                                                                    class="form-control {{ $fidelidad }}"
                                                                    name="Producto_comercial"
                                                                    placeholder="{{ __('client.consumed_loyalty') }}"
                                                                    value="{{ $consumo }}%" disabled>
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
                        <!-- Servicios -->
                        <div class="tab-pane fade show" id="servicios" role="tabpanel">
                            @php
                                $shops = [];
                                $x = 0;
                                foreach ($shopsInfo as $k => $shop) {
                                    if ($x > 0) {
                                        $shops[$x] = new \App\class\CUSTTABLE_CLASS($empresa, $k, $clienteInfo->WEBLOGIN, $shop, $shops[0]->ownProduct);
                                    } else {
                                        $shops[$x] = new \App\class\CUSTTABLE_CLASS($empresa, $k, $clienteInfo->WEBLOGIN, $shop);
                                    }
                                    $x++;
                                }
                            @endphp

                            <div class="d-flex justify-content-center p-md-5 ps-md-2 pe-md-2 sizeCard">
                                <table class="table table-striped">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">{{ __('client.services') }}</th>
                                            @foreach($shops as $shop)
                                                <th scope="col">
                                                    {{ $shop->nameAlias }}
                                                </th>
                                            @endforeach

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Natural View / Ugosoft</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->services['6']['status'])) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.sales_assistant') }}</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->services['7']['status'])) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.fideliza_use') }}</td>
                                            @foreach($shops as $shop)
                                                <td>
                                                    @if(isset($shop->services['13']['status']))
                                                        <img src="{{ asset(getIcon($shop->services['13']['status'])) }}" alt="check" width="30" height="30">
                                                    @else
                                                        <img src="{{ asset(getIcon(0)) }}" alt="no data" width="30" height="30">
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>

                                        <tr>
                                            <td>Natural TV</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->services['9']['status'])) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.app_download') }}</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->services['8']['status'])) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.web_profile') }}</td>
                                            @foreach($shops as $shop)
                                                <td>
                                                    @if($shop->services['1']['status'] == 1)
                                                        <a href="{{$shop->services['1']['url']}}" target="_blank">
                                                            <img src="{{ asset(getIcon($shop->services['1']['status'])) }}" alt="check" width="30" height="30">
                                                        </a>
                                                    @else
                                                        <img src="{{ asset(getIcon($shop->services['1']['status'])) }}" alt="check" width="30" height="30">
                                                    @endif
                                                </td>
                                            @endforeach

                                        </tr>
                                        <tr>
                                            <td>{{ __('client.web_images') }}</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->services['2']['status'])) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.web_services') }}</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->services['3']['status'])) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Google My Business</td>
                                            @foreach($shops as $shop)
                                                <td>
                                                    @if($shop->services['4']['status'] == 1)
                                                        <a href="{{$shop->services['4']['url']}}" target="_blank">
                                                            <img src="{{ asset(getIcon($shop->services['4']['status'])) }}" alt="check" width="30" height="30">
                                                        </a>
                                                    @else
                                                        <img src="{{ asset(getIcon($shop->services['4']['status'])) }}" alt="check" width="30" height="30">
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Tour Virtual</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->services['5']['status'])) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            {{-- Cabecera: nivel de servicio del shop principal --}}
                                            <td>
                                                {{ __('Servicio Community') }}
                                                @php
                                                    $niveles = [
                                                        '100' => 'Basic',
                                                        '123' => 'Profesional: FACEBOOK',
                                                        '142' => 'Profesional: FACEBOOK + INSTAGRAM',
                                                        '124' => 'Advanced: FACEBOOK',
                                                        '131' => 'PROMO',
                                                        '143' => 'Advanced: FACEBOOK INSTAGRAM',
                                                        '153' => 'PREMIUM +',
                                                    ];

                                                    $nivelTexto = null;

                                                    foreach ($niveles as $codigo => $texto) {
                                                        if (isset($shops[0]->finantial[$codigo])) {
                                                            $nivelTexto = $texto;
                                                            break;
                                                        }
                                                    }
                                                @endphp

                                                @if($nivelTexto)
                                                    - <b>{{ $nivelTexto }}</b>
                                                @endif
                                            </td>
                                            @foreach($shops as $shop)
                                                <td>
                                                    @php
                                                        $activo = false;
                                                        foreach ($niveles as $codigo => $texto) {
                                                            if (isset($shop->finantial[$codigo])) {
                                                                $activo = true;
                                                                break;
                                                            }
                                                        }
                                                    @endphp

                                                    <img src="{{ asset($activo ? 'assets/icon/check.png' : 'assets/icon/cancel.png') }}" width="30" height="30" alt="{{ $activo ? 'check' : 'cancel' }}">
                                                </td>
                                            @endforeach
                                        </tr>

                                        <tr>
                                            <td>Microweb</td>
                                            @foreach($shops as $shop)
                                                @php
                                                    $hasFinantial = isset($shop->finantial['149']) || isset($shop->finantial['150']);
                                                @endphp
                                                <td><img src="{{ asset(getIcon($hasFinantial ? 1 : 0)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Natural BI</td>
                                            @foreach($shops as $shop)
                                                @php
                                                    $hasFinantial = isset($shop->finantial['139']);
                                                @endphp
                                                <td><img src="{{ asset(getIcon($hasFinantial ? 1 : 0)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.macro_campaigns') }}</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->macro)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.micro_campaigns') }}</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->micro)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        {{-- <tr>
                                            <td>{{ __('client.own_product_purchases') }}</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->services['7']['status'])) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr> --}}
                                        <tr>
                                            <td>Antonio Miro</td>
                                            @foreach($shops as $shop)
                                                @php
                                                    $hasAntonioMiro  = isset($shop->ownProduct['ANTONIO MIRO']) && $shop->ownProduct['ANTONIO MIRO'] >= 10;
                                                @endphp
                                                <td><img src="{{ asset(getIcon($hasAntonioMiro ? 1 : 0)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Miro Jeans</td>
                                            @foreach($shops as $shop)
                                                @php
                                                    $MiroJeans  = isset($shop->ownProduct['MIROJEANS']) && $shop->ownProduct['MIROJEANS'] >= 10;
                                                @endphp
                                                <td><img src="{{ asset(getIcon($MiroJeans ? 1: 0)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Be Natural / Be Happy</td>
                                            @foreach($shops as $shop)
                                                @php
                                                    $BeNaturalBeHappy  = isset($shop->ownProduct['BE HAPPY']) 
                                                    && isset($shop->ownProduct['BE NATURAL']) 
                                                    && ($shop->ownProduct['BE HAPPY']+$shop->ownProduct['BE NATURAL']) >= 10;
                                                @endphp
                                                <td><img src="{{ asset(getIcon($BeNaturalBeHappy ? 1: 0)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Monsine</td>
                                            @foreach($shops as $shop)
                                                @php
                                                    $Monsine  = isset($shop->ownProduct['MONSINE']) && $shop->ownProduct['MONSINE'] >= 10;
                                                @endphp
                                                <td><img src="{{ asset(getIcon($Monsine ? 1: 0)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.financial_services') }}</td>
                                            @foreach($shops as $shop)
                                                @php
                                                    $ServiciosFinancieros  = isset($shop->finantial['101'])
                                                    ||isset($shop->finantial['121'])
                                                    ||isset($shop->finantial['89']);
                                                @endphp
                                                <td><img src="{{ asset(getIcon($ServiciosFinancieros ? 1: 0)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.rgpd_implementation') }}</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->rgpd === 1 ? 1: 0)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.rgpd_audit') }}</td>
                                            @foreach($shops as $shop)
                                                <td>
                                                    @if(isset($shop->services['12']['status']))
                                                        <img src="{{ asset(getIcon($shop->services['12']['status'])) }}" alt="check" width="30" height="30">
                                                    @else
                                                        <img src="{{ asset(getIcon(0)) }}" alt="no data" width="30" height="30">
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>WIVI</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->services['11']['status'])) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>{{ __('client.fee') }}</td>
                                            @foreach($shops as $shop)
                                                <td><img src="{{ asset(getIcon($shop->cuota)) }}" alt="check" width="30" height="30"></td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade show" id="servicios" role="tabpanel">
                                @php
                                    $shops = [];
                                    $x = 0;
                                    foreach ($shopsInfo as $k => $shop) {
                                        if ($x > 0) {
                                            $shops[$x] = new \App\class\CUSTTABLE_CLASS($empresa, $k, $clienteInfo->WEBLOGIN, $shop, $shops[0]->ownProduct);
                                        } else {
                                            $shops[$x] = new \App\class\CUSTTABLE_CLASS($empresa, $k, $clienteInfo->WEBLOGIN, $shop);
                                        }
                                        $x++;
                                    }

                                    $niveles = [
                                        '100' => 'Basic',
                                        '123' => 'Profesional: FACEBOOK',
                                        '142' => 'Profesional: FACEBOOK + INSTAGRAM',
                                        '124' => 'Advanced: FACEBOOK',
                                        '131' => 'PROMO',
                                        '143' => 'Advanced: FACEBOOK INSTAGRAM',
                                        '153' => 'PREMIUM +',
                                    ];

                                    $nivelTexto = null;
                                    $codigoNivel = null;

                                    foreach ($niveles as $codigo => $texto) {
                                        if (isset($shops[0]->finantial[$codigo])) {
                                            $nivelTexto = $texto;
                                            $codigoNivel = $codigo;
                                            break;
                                        }
                                    }

                                    // Lista de servicios que quieres mostrar (clave, nombre amigable)
                                    $servicios = [
                                        ['key' => '6', 'label' => 'Natural View / Ugosoft'],
                                        ['key' => '7', 'label' => __('client.sales_assistant')],
                                        ['key' => '13', 'label' => __('client.fideliza_use')],
                                        ['key' => '9', 'label' => 'Natural TV'],
                                        ['key' => '8', 'label' => __('client.app_download')],
                                        ['key' => '1', 'label' => __('client.web_profile')],
                                        ['key' => '2', 'label' => __('client.web_images')],
                                        ['key' => '3', 'label' => __('client.web_services')],
                                        ['key' => '4', 'label' => 'Google My Business'],
                                        ['key' => '5', 'label' => 'Tour Virtual'],
                                        ['key' => $codigoNivel, 'label' => __('Servicio Community')],
                                        ['key' => '12', 'label' => __('client.rgpd_audit')],
                                        ['key' => '11', 'label' => 'WIVI'],
                                    ];

                                @endphp
    
                                <div class="d-flex justify-content-center p-md-5 ps-md-2 pe-md-2 sizeCard">
                                    <table id="serviciosTable" class="table table-bordered table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>{{ __('Servicio') }}</th>
                                                <th>{{ __('Tienda') }}</th>
                                                <th>{{ __('Estado') }}</th>
                                                {{-- <th>{{ __('Enlace') }}</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($servicios as $servicio)
                                                @foreach($shops as $shop)
                                                    @php
                                                        $key = $servicio['key'];
                                                        $estado = $shop->services[$key]['status'] ?? 0;
                                                        $icono = getIcon($estado);
                                                        //$url = $shop->services[$key]['url'] ?? null;
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $servicio['label'] }}
                                                            @if($servicio['label'] === __('Servicio Community'))
                                                                - <b>{{ $nivelTexto }}</b>
                                                            @endif
                                                        </td>
                                                        <td>{{ $shop->nameAlias }}</td>
                                                        <td>
                                                            @if($key === '1' || $key === '4')
                                                                <a href="{{$shop->services[$key]['url']}}" target="_blank">
                                                            @endif
                                                                <img src="{{ asset($icono) }}" alt="estado" width="30" height="30">
                                                            @if($key === '1')
                                                                </a>
                                                            @endif
                                                        </td>
                                                        {{-- <td>
                                                            @if($estado == 1 && $url)
                                                                <a href="{{ $url }}" target="_blank">🔗</a>
                                                            @else
                                                                -
                                                            @endif
                                                        </td> --}}
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                @if ($devolucion > 0)
                    <div class="card-profile-image mb-4">
                        <span class="devolucion">DEVOLUCIÓN POR MONTO: {{ number_format($devolucion, 2, ',', '.') }}
                            €</span>
                    </div>
                @endif
            </div>

        </div>

    </div>
@endsection
