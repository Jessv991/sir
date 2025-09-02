@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('auth.about') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <img src="{{ asset('img/favicon.png') }}" class="rounded-circle" alt="user-image">
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
                                @csrf
                                @method('PUT')

                                <div class="ps-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group focused">
                                                <label class="form-label" for="cod_client">ID</label>
                                                <input type="text" id="cod_client" class="form-control" name="cod_client"
                                                    placeholder="ID"
                                                    value="{{ old('cod_client', Auth::user()->NAME) }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group focused">
                                                <label class="form-label" for="name">{{ __('client.trade_name') }}</label>
                                                <input type="text" id="name" class="form-control" name="name"
                                                    placeholder="{{ __('client.trade_name') }}"
                                                    value="{{ old('name', Auth::user()->NAME) }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group focused">
                                                <label class="form-label" for="extension">{{ __('client.tax_name') }}</label>
                                                <input type="text" id="extension" class="form-control" name="extension"
                                                    placeholder="{{ __('client.tax_name') }}"
                                                    value="{{ old('extension', Auth::user()->PHONELOCAL) }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group focused">
                                                <label class="form-label" for="cif">NIF/CIF</label>
                                                <input type="text" id="cif" class="form-control" name="cif"
                                                    placeholder="NIF/CIF"
                                                    value="{{ old('cif', Auth::user()->PHONELOCAL) }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" id="email" class="form-control" name="email"
                                                    placeholder="Email" value="{{ old('email', Auth::user()->EMAIL) }}"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-label" for="sede">{{ __('client.payment') }}</label>
                                                <input type="text" id="sede" class="form-control" name="sede"
                                                    placeholder="{{ __('client.payment') }}"
                                                    value="{{ old('sede', Auth::user()->SEDE) }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
