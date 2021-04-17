@extends('simpleadmin::auth')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7 mt-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Restablecer contraseña</h3></div>
            <div class="card-body">
                <div class="small mb-3 text-muted">
                    Ingresa tu correo electrónico y te enviaremos un link para poder restablecer tu contraseña.
                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Correo electrónico</label>
                        <input class="form-control py-4  @error('email') is-invalid @enderror" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Ingresa tu correo electrónico" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <a class="small" href="{{ route('login') }}">Regresar al inicio de sesión</a>
                        <button type="submit" class="btn btn-primary">Enviar enlace de reseteo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
