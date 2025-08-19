@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('auth.profile') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-start-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-start-danger" role="alert">
            <ul class="ps-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-4 order-lg-2">

            <div class="card shadow mb-4">
                <div class="card-profile-image d-flex align-items-center justify-content-center p-4 pb-0">
                    <figure class="rounded-circle avatar avatar fw-bold" style="font-size: 47px; height: 112px; width: 113px;" data-initial="{{ Auth::user()->NAME[0] }}"></figure>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="fw-bold">{{  Auth::user()->NAME }}</h5>
                                <p>{{  Auth::user()->PBAUSERPROFILE }} - {{  Auth::user()->WORKINGCOMPANY }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 style="color: #4e73df;" class="m-0 fw-bold">{{ __('auth.account') }}</h6>
                </div>

                <div class="card-body p-4">

                    <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
                        @csrf
                        @method('PUT')

                        <div class="ps-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-label" for="name">{{ __('auth.full_name') }}</label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="{{ __('auth.full_name') }}" value="{{ old('name', Auth::user()->NAME) }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="{{ old('email', Auth::user()->EMAIL) }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-label" for="extension">{{ __('auth.extension') }}</label>
                                        <input type="text" id="extension" class="form-control" name="extension" placeholder="{{ __('auth.extension') }}" value="{{ old('extension', Auth::user()->PHONELOCAL) }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-label" for="sede">{{ __('auth.sede') }}</label>
                                        <input type="text" id="sede" class="form-control" name="sede" placeholder="{{ __('auth.sede') }}" value="{{ old('sede', Auth::user()->SEDE) }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
