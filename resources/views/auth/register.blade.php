@extends('layouts.app')
@section('content')
    <div class="register-box ml-auto mr-auto pt-3">
        <div class="card">
            <div class="card-body register-card-body">
                <h3 class="login-box-msg">Register a new coordinator</h3>
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <label>Name</label>
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
                    <label>Surname</label>
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
                    <label>Patronymic</label>
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
                    <label>Phone(WhatsApp)</label>
                    <div class="input-group mb-3">
                        <input type="tel"
                               name="phone" id="phone"
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
@endsection
