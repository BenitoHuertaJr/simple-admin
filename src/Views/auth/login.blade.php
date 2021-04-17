@extends('simpleadmin::auth')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7 mt-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Inicio de sesión</h3></div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Correo electrónico</label>
                        <input class="form-control py-4 @error('email') is-invalid @enderror" id="inputEmailAddress" type="email" placeholder="Ingresa tu correcto electrónico" name="email" value="{{ old('email') }}" autocomplete="email" autofocus required/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Contraseña</label>
                        <input class="form-control py-4  @error('password') is-invalid @enderror" id="inputPassword" type="password" placeholder="Ingresa tu contraseña"  name="password" autocomplete="current-password" required/>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="remember" id="rememberPasswordCheck" type="checkbox" {{ old('remember') ? 'checked' : '' }}/>
                            <label class="custom-control-label" for="rememberPasswordCheck">Recordarme</label>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        @if (Route::has('password.request'))
                            <a class="small" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
