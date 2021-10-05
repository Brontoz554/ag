<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Registration Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card">
        <div class="card-body register-card-body">
            <h3 class="login-box-msg">Register a new coordinator</h3>
            <form method="post" action="{{ route('register') }}">
                @csrf
                <label for="">Name</label>
                <div class="input-group mb-3">
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}"
                           placeholder="Name">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="">Surname</label>
                <div class="input-group mb-3">
                    <input type="text"
                           name="surname"
                           class="form-control @error('surname') is-invalid @enderror"
                           value="{{ old('surname') }}"
                           placeholder="Surname">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="">Patronymic</label>
                <div class="input-group mb-3">
                    <input type="text"
                           name="patronymic"
                           class="form-control @error('patronymic') is-invalid @enderror"
                           value="{{ old('patronymic') }}"
                           placeholder="Patronymic">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('patronymic')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="">Phone</label>
                <div class="input-group mb-3">
                    <input type="tel"
                           name="phone"
                           value="{{ old('phone') }}"
                           class="form-control @error('phone') is-invalid @enderror"
                           placeholder="Phone">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-phone"></span></div>
                    </div>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
