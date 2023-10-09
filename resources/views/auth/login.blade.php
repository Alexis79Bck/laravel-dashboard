@extends('layouts.base-login')

@section('login-card')
    <div class="card shadow elevation-2 w-75 mx-auto" style="margin-top: 80px" >
        <div class="mx-auto text-center">

            <img src="{{ asset('assets/images/illustration-dashboard-admin.jpg') }}" alt="logo" height="128px"
                    width="128px">
        </div>
        <div class="card-body p-4">

            <h4 class=" auth-card-title">{{ __('Iniciar Sesión') }}</h4>

            <form method="POST" action="{{ route('login') }}">
                        @csrf

                <div class="form-group mb-3">
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

                <div class="form-group mb-3">
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

                <div class="form-group mb-3">
                    <div class="custom-control custom-checkbox checkbox-info">
                        <input 
                            type="checkbox" 
                            class="custom-control-input" 
                            name="rememberme" 
                            id="rememberme" 
                            {{ old('rememberme') ? 'checked' : '' }} 
                        />
                        <label class="custom-control-label" for="rememberme" >Recuerdame</label>
                    </div>
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

@section('forget-password-link')
        <p class="text-white"> 
            <a href="pages-recoverpw.html" class="text-light ml-1">
                {{__('Olvidaste la Contraseña')}}?
            </a>
        </p>
        

@endsection

@section('create-account-link')

<p class="text-white">
    {{__('No tienes una cuenta')}}? 
    <a href="pages-register.html"class="text-light ml-1">
        <span class="fw-bold">{{__('Registrate')}}</span>
    </a>
</p>
@endsection

@section('footer')
    @include('commons.footer') 
@endsection

@section('scripts')
    @include('commons.scripts')

@endsection


