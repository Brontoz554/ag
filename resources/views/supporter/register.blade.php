<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Registration Page</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card mt-5 mb-5">
        <div class="card-body register-card-body">
            <h2 class="login-box-msg">Register a new supporter</h2>
            <form method="post" action="{{ route('register-supporter') }}" enctype="multipart/form-data">
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
                <label for="">Referral link</label>
                <div class="input-group mb-3">
                    <input type="tel"
                           name="referral_link"
                           value="{{ old('referral_link') }}"
                           class="form-control @error('referral_link') is-invalid @enderror"
                           placeholder="Referral link">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-link"></span></div>
                    </div>
                    @error('referral_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="">Residence address</label>
                <div class="input-group mb-3">
                    <input type="tel"
                           name="residence_address"
                           value="{{ old('residence_address') }}"
                           class="form-control @error('residence_address') is-invalid @enderror"
                           placeholder="Residence address">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-map"></span></div>
                    </div>
                    @error('residence_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="">INN</label>
                <div class="input-group mb-3">
                    <input type="tel"
                           name="INN"
                           value="{{ old('INN') }}"
                           class="form-control @error('INN') is-invalid @enderror"
                           placeholder="INN">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                    </div>
                    @error('INN')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="passport_series">Passport series</label>
                <div class="input-group mb-3">
                    <input type="tel"
                           name="passport_series"
                           value="{{ old('passport_series') }}"
                           class="form-control @error('passport_series') is-invalid @enderror"
                           placeholder="Passport series">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-passport"></span></div>
                    </div>
                    @error('passport_series')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="passport_number">Passport number</label>
                <div class="input-group mb-3">
                    <input type="tel"
                           name="passport_number"
                           value="{{ old('passport_number') }}"
                           class="form-control @error('passport_number') is-invalid @enderror"
                           placeholder="Passport number">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-passport"></span></div>
                    </div>
                    @error('passport_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="">Passport date</label>
                <div class="input-group mb-3">
                    <input type="tel"
                           name="passport_date"
                           value="{{ old('passport_date') }}"
                           class="form-control @error('passport_date') is-invalid @enderror"
                           placeholder="Passport date">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-passport"></span></div>
                    </div>
                    @error('passport_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="passport_face_photo">the front side of the passport</label>
                <div class="input-group mb-3">
                    <br>
                    <input type="file"
                           name="passport_face_photo"
                           class="@error('passport_face_photo') is-invalid @enderror"
                           value="{{ old('passport_face_photo') }}">
                    <div class="input-group-append">
                    </div>
                    @error('passport_face_photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <label for="passport_residence_address">registration address in the passport</label>
                <div class="input-group mb-3">
                    <br>
                    <input type="file"
                           name="passport_residence_address"
                           class="@error('passport_residence_address') is-invalid @enderror"
                           value="{{ old('passport_residence_address') }}">
                    <div class="input-group-append">
                    </div>
                    @error('passport_residence_address')
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
