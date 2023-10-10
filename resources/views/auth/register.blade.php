@extends('layouts.base-register')


@section('register-card')
    <div class="card shadow elevation-2 w-75 mx-auto" style="margin-top: 80px" >
        <div class="mx-auto text-center">

            <img src="{{ asset('assets/images/illustration-dashboard-admin.jpg') }}" alt="logo" height="128px"
                    width="128px">
        </div>
        <div class="card-body p-4">

            <h4 class=" auth-card-title">{{ __('Registrar') }}</h4>

            <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group my-3">
                            <label for="fullname">{{ __('Nombre Completo') }}</label>
                            <input 
                                type="text" 
                                class="form-control @error('fullname') is-invalid @enderror"  
                                name="fullname" 
                                id="fullname" 
                                placeholder="{{ __('Escriba Nombre Completo') }}" 
                                value="{{ old('fullname') }}" 
                                required 
                                autocomplete="fullname" 
                                autofocus 
                            />
                            @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        
                        </div>

                        <div class="form-group my-3">
                            <label for="email">{{ __('Correo Electronico') }}</label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror"  
                                name="email" 
                                id="email" 
                                placeholder="{{ __('Ingrese Correo Electronico') }}" 
                                value="{{ old('email') }}" 
                                required 
                                autocomplete="email" 
                                autofocus 
                            />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        
                        </div>

                <div class="form-group my-3">
                    <label for="username">{{ __('Nombre de Usuario') }}</label>
                    <input 
                        type="text" 
                        class="form-control @error('username') is-invalid @enderror"  
                        name="username" 
                        id="username" 
                        placeholder="{{ __('Ingrese Nombre de Usuario') }}" 
                        value="{{ old('username') }}" 
                        required 
                        autocomplete="username" 
                        autofocus 
                    />
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group my-3">
                    <label for="password">{{ __('Contraseña') }}</label>
                    <input 
                        type="password" 
                        class="form-control @error('password') is-invalid @enderror" 
                        id="password"
                        name="password"
                        required 
                        autocomplete="current-password"
                        placeholder="{{ __('Ingrese Contraseña') }}" 
                    />

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        id="password-confirm"
                        name="password_confirmation"
                        required 
                        autocomplete="new-password"
                        placeholder="{{ __('Ingrese Nuevamente la Contraseña') }}" 
                    />
                </div>


                <div class="form-group mb-0 text-center">
                    <button  class="btn btn-primary btn-block"  type="submit"> 
                        {{ __('Ingresar') }}
                    </button>
                </div>

            </form>

        </div> <!-- end card-body -->
    </div>
@endsection
{{-- @section('register-card')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf



                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
