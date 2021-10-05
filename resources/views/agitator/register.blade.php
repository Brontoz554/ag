@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="register-box justify-content-center ml-auto mr-auto pt-5 pb-5">
        <div class="card">
            <div class="card-body register-card-body">
                <h3 class="login-box-msg">Register a new Agitator</h3>
                <form method="post" action="{{ route('register-agitator') }}" enctype="multipart/form-data">
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
                    <label for="phone">Phone</label>
                    <div class="input-group mb-3">
                        <br>
                        <input type="text"
                               name="phone"
                               class="form-control @error('phone') is-invalid @enderror"
                               value="{{ old('phone') }}"
                               placeholder="phone">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-phone"></span></div>
                        </div>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label for="passport_series">Passport series</label>
                    <div class="input-group mb-3">
                        <br>
                        <input type="text"
                               name="passport_series"
                               class="form-control @error('passport_series') is-invalid @enderror"
                               value="{{ old('passport_series') }}"
                               placeholder="series">
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
                        <br>
                        <input type="text"
                               name="passport_number"
                               class="form-control @error('passport_number') is-invalid @enderror"
                               value="{{ old('passport_number') }}"
                               placeholder="number">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-passport"></span></div>
                        </div>
                        @error('passport_number')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label for="passport_date">Passport date</label>
                    <div class="input-group mb-3">
                        <br>
                        <input type="text"
                               name="passport_date"
                               class="form-control @error('passport_date') is-invalid @enderror"
                               value="{{ old('passport_date') }}"
                               placeholder="passport date">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-passport"></span></div>
                        </div>
                        @error('passport_date')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label for="residence_address">Residence address</label>
                    <div class="input-group mb-3">
                        <br>
                        <input type="text"
                               name="residence_address"
                               class="form-control @error('residence_address') is-invalid @enderror"
                               value="{{ old('residence_address') }}"
                               placeholder="residence address">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-map"></span></div>
                        </div>
                        @error('residence_address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <label for="INN">INN</label>
                    <div class="input-group mb-3">
                        <br>
                        <input type="text"
                               name="INN"
                               class="form-control @error('INN') is-invalid @enderror"
                               value="{{ old('INN') }}"
                               placeholder="INN">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fa fa-id-card-o"></span></div>
                        </div>
                        @error('INN')
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
    @slot('js')
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endslot
@endsection
